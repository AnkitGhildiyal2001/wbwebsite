<?php

namespace App\Http\Controllers;

use App\User;
use App\Plan;
use App\Product;
use App\Campaign;
use App\CampaignType;
use App\CampaignState;
use App\GiveawayAddress;
use App\CampaignImage;
use App\CampaignActivity;
use App\CampaignCategory;
use App\VariationSelection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use App\Mail\CampaignNotification;
use Illuminate\Support\Facades\Mail;
/*
[{"image": "mustermann-gmbh/16129699225F5A942E-EA9D-48F3-BF2D-139337BE2AEE.jpeg", "quantity": "22", "variation": "Dummy Variation"}, {"image": "mustermann-gmbh/161296992299DFA681-DC3A-4080-8BB1-20F9C112BE48.jpeg", "quantity": "55", "variation": "Second Dummy Variation"}]*/

//http://localhost:8000/kampagne/lufthansa/qui-asperiores-iste-qui-id-ut-neque-eligendi-natus
class CampaignController extends Controller
{
    private $baseUrl = "https://wb-productimages.s3.eu-central-1.amazonaws.com/";
    //private $baseUrl = "http://localhost:8000/images/";
    private function send_campaign_notification($campaign){

        $result = DB::table('campaign_categories')
        ->join('campaign_category_user', 'campaign_category_user.campaign_category_id','=','campaign_categories.id')
        ->join('users','users.id','=','campaign_category_user.user_id')
        ->join('campaigns', 'campaigns.states', 'LIKE', DB::raw( "CONCAT('%', users.state, '%') " ))
        ->where('campaigns.age_range->first', '<=' ,DB::raw( "YEAR(CURDATE())-YEAR(birthday)" ))
        ->where('campaigns.age_range->second', '>=' ,DB::raw( "YEAR(CURDATE())-YEAR(birthday)" ))
        ->where('users.notify', true)
        /*->whereNotNull(DB::raw( "json_extract(users.channels, '$.instagram')"))
        ->whereNotNull(DB::raw( "json_extract(users.channels, '$.youtube')"))
        ->whereNotNull(DB::raw( "json_extract(users.channels, '$.twitch')"))*/
        ->select('users.email','users.name','users.firstname','users.lastname')->get()->unique();

        if(!$result->isEmpty()){
          //$user_emails = $result->pluck('email')->all();
         foreach ($result as $user) {
             Mail::to($user)->send(new CampaignNotification($campaign, $user));
         }

        }

        return true;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function campaign_details(Request $request)
    {
        Session::put('new_campaign_description', $request->new_campaign_description);
        Session::put('need_to_do', json_encode($request->need_to_do));

        return json_encode(['success' => 'success']);
    }
    public function submitgiveawayaddress(Request $request, $campaignSlug, $influencerSlug)
    {
        $influencer = User::where('slug', $influencerSlug)->first();
        $campaign = Campaign::where('slug', $campaignSlug)->first();

        $giveaway_address = GiveawayAddress::where('user_id',$influencer->id)
                    ->where('campaign_id',$campaign->id)
                    ->first();
        if($giveaway_address === null)
        $giveaway_address = new GiveawayAddress;
        $giveaway_address->address = json_encode($request->submission);
        $giveaway_address->user_id = $influencer->id;
        $giveaway_address->campaign_id = $campaign->id;
        $giveaway_address->save();

        return redirect()->route('user.campaign.index');

    }
    public function index(Request $request)
    {
        $user = auth()->user();

        $isCompany = $user->isCompany();

        $selectedCategories = [];
        $searchquery = null;

        if ($isCompany) {
            abort(403);
        }

        $hasChannels = $user->hasChannels();

        $categories = CampaignCategory::all();

        $userSelectedCategpries = auth()->user()->campaignCategories()->pluck('campaign_category_id')->toArray();
        $selectedCategories = $userSelectedCategpries;
        //still TODO
        //filter and search query

        //filter
        if ($request->get('category') && !$request->get('s')) {
            $selectedCategories = $request->category;
            $campaigns = Campaign::applicable()->age($user->birthday)->state($user->state)
                                ->where(function ($query) use ($selectedCategories) {
                                    $query->whereIn('campaign_category_id', $selectedCategories);
                                })
                                ->where('status', 1)
                                ->orderBy('created_at')
                                ->paginate(24);
        }

        //search query
        if ($request->get('s') && !$request->get('category')) {
            $searchquery = $request->s;

                $campaigns = Campaign::applicable()->age($user->birthday)->state($user->state)->where(function ($query) use ($searchquery, $selectedCategories) {
                    $query->whereHas('company', function ($query) use ($searchquery) {
                        $query->where('name', 'like', '%' . $searchquery . '%');
                    })->orWhere('title', 'like', '%' . $searchquery . '%')
                    ->orWhere('description', 'like', '%' . $searchquery . '%');
                })
                    ->whereIn('campaign_category_id', $selectedCategories)
                    ->where('status', 1)
                    ->orderBy('created_at')
                    ->paginate(24);
        }

        // no filters

        if (!$request->get('s') && !$request->get('category')) {
            $campaigns = Campaign::applicable()->age($user->birthday)->state($user->state)
                                ->whereIn('campaign_category_id', $selectedCategories)
                                ->where('status', 1)
                                ->paginate(24);
        }

        return view('campaign.index', compact('campaigns', 'user', 'categories', 'searchquery', 'selectedCategories', 'userSelectedCategpries', 'hasChannels'));
    }
    public function update_options(Request $request){
        //return "done";
        $campaign = $this->createCampaign();
        //$campaign = Campaign::find(Campaign::max('id'));
        //if(!empty($request->choice_key))
        $campaign->states = json_encode($request->choice_key);
        $range_arr = explode(",",$request->age_range);
        $range_ass_arr = array('first' => intval($range_arr[0]), 'second' => intval($range_arr[1]));
        $campaign->age_range = json_encode($range_ass_arr);
        $campaign->save();
        $this->send_campaign_notification($campaign);
        return response()->json(['success' => 'success'], 200);
        //$validate['hashtags'] = json_encode($hashtags);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = auth()->user();

        $getProducts = $user->company->products;

        $shallDisable = $getProducts->count() ? false : true;

        //dd($getProducts);
        $types = CampaignType::all();

        $categories = CampaignCategory::all();

        $company = auth()->user()->company;

        $products = Product::where('company_id',$company->id)->get();

        $currentPlan = auth()->user()->subscription('default') ?? NULL;

        $max_users = 0;
        if(!is_null($currentPlan)){
            $selectedPlan = Plan::where('stripe_plan_id', $currentPlan->stripe_plan)->first();
            if($selectedPlan){
                $max_users = $selectedPlan->max_users;
            }
        }


        $isCoupon = $request->has('coupon');
        $isProduct = $request->has('product');
        $isGiveaway = $request->has('giveaway');
        $isReview = $request->has('review');

        return view('campaign.create', compact('types', 'products', 'categories', 'company', 'isCoupon', 'isProduct', 'isGiveaway', 'isReview', 'max_users', 'user','shallDisable'));
    }
    private function createCampaign(){
                if(Session::has('temp_campaign')){

            $company = auth()->user()->company;

            $validate = Session::get('temp_campaign');

            $campaign = Campaign::create($validate);

            CampaignActivity::create([
                'campaign_activity_id' => 6,
                'campaign_id' => $campaign->id,
                'company_id' => $company->id,
                'company_user_id' => auth()->user()->id,
            ]);

            if(Session::has('paths')){

            $paths = Session::get('paths');
            foreach ($paths as $path) {
              CampaignImage::create([
                    'url' => $path,
                    'campaign_id' => $campaign->id,
              ]);
            }
          }

          if(Session::has('new_campaign_description')){
            $new_campaign_description = Session::get('new_campaign_description');
            $need_to_do = Session::get('need_to_do');
            $campaign->campaign_description = $new_campaign_description;
            $campaign->need_to_do = $need_to_do;
            $campaign->save();
          }
          return $campaign;
        }
    }
    public function paysuccess(Request $request)
    {
        $campaign = $this->createCampaign();
        $this->send_campaign_notification($campaign);
        return json_encode(['success' => 'success']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'publication_period_from' => 'required|date|before_or_equal:publication_period_to',
            'publication_period_to' => 'required|date',
            'account_to_tag' => 'required|string',
            'influencer_quantity' => 'required|integer|min:1',
            'category_id' => 'required',
            'influencer_product' => 'nullable|exists:products,id',
            'campaign_type' => 'required|numeric'
        ]);
        if($request->campaign_type != 3){
            $hashtags = $request->has('hashtags') ? $request['hashtags'] : NULL;
            $validate['hashtags'] = json_encode($hashtags);
        }else
          $validate['account_to_tag'] = NULL;
        $validate['campaign_category_id'] = $validate['category_id'];
        $validate['youtube'] = $request->has('youtube') ? 1 : NULL;
        $validate['twitch'] = $request->has('twitch') ? 1 : NULL;
        $validate['instagram'] = $request->has('instagram') ? 1 : NULL;
        $validate['coupon_code'] = $request->has('coupon') ? $request['coupon'] : NULL;
        $validate['dummycode'] = $request->has('dummycode') ? 1 : NULL;
        $validate['product_givaway_count'] = $request->has('product_givaway_count') ? $request['product_givaway_count'] : NULL;
        $validate['participation_terms'] = $request->has('participation_terms') ? $request['participation_terms'] : NULL;
        $validate['approve_influencer'] = $request->has('approve_influencer') ? 1 : NULL;
        $validate['shipping_by_company'] = $request->has('shipping_by_company') ? 1 : NULL;
        $validate['custom_packaging'] = $request->has('custom_packaging') ? 1 : NULL;

        //delete when target_audience_id is removed from db table
        $validate['target_audience_id'] = 1;

        $publication_period_from = $validate['publication_period_from'];
        $publication_period_to = $validate['publication_period_to'];
        $from = str_replace('/', '-', $publication_period_from);
        $to = str_replace('/', '-', $publication_period_to);
        $publication_period_from = date('Y-m-d', strtotime($from));
        $publication_period_to = date('Y-m-d', strtotime($to));
        $validate['publication_period_from'] = $publication_period_from;
        $validate['publication_period_to'] = $publication_period_to;

        $company = auth()->user()->company;

        $validate['company_id'] = $company->id;
        $validate['slug'] = $this->createSlug($validate['title']);

        if($validate['campaign_type'] == 3)
          $validate['review_url'] = $request->review_url;

        $coupon_code = $validate['coupon_code'];
        $validate['status'] = 1;
        /*if($coupon_code){
            $validate['status'] = 1;
        }else{*/
            //$validate['status'] = 0;
            //$validate['status'] = $request->has('shipping_by_company') ? 1 : 0;
            /*if($request->has('shipping_by_company')){
                $validate['status'] = 1;
            }else{
                $validate['status'] = 0;
            }*/
        //}
        if($request->has('shipping_by_company')){
        }
        else{
            $validate['states'] = json_encode($request->choice_key);
            $range_arr = explode(",",$request->age_range);
            $range_ass_arr = array('first' => intval($range_arr[0]), 'second' => intval($range_arr[1]));
            $validate['age_range'] = json_encode($range_ass_arr);
        }
        $validate['campaign_url'] = $request->campaign_url;
        Session::put('temp_campaign', $validate);
        $campaign_id = Campaign::max('id');
        $campaign = new \StdClass();
        $campaign->id = $campaign_id + 1;
        /*$campaign = Campaign::create($validate);


        CampaignActivity::create([
            'campaign_activity_id' => 6,
            'campaign_id' => $campaign->id,
            'company_id' => $company->id,
            'company_user_id' => auth()->user()->id,
        ]);*/

        $bucket = 'wb-campaigns';
        Config::set('filesystems.disks.s3.bucket', $bucket);

        $company = auth()->user()->company->slug;

        if ($request->hasFile('gallery')) {
            $patharr = array();
            $files = $request->file('gallery');
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $company . '/' . $campaign->id . '/' . $name;
                $file->storeAs($company . '/' . $campaign->id, $name);
                /*CampaignImage::create([
                    'url' => $path,
                    'campaign_id' => $campaign->id,
                ]);*/
                array_push($patharr, $path);
            }
            Session::put('paths', $patharr);
        }
        $metadata = [
            'user_id' => auth()->user()->id,
            'campaign_id' => $campaign->id,
        ];
        $sessionId = false;
        if(Session::has('line_items')){
            Session::put('campaign_id', $campaign->id);

            Stripe::setApiKey(env('STRIPE_SECRET'));

            $payment_method_types = ['card'];
            $line_items = Session::get('line_items');
            $success_url = route('campaign.success')."?session_id={CHECKOUT_SESSION_ID}";
            $cancel_url = route('campaign.cancel');
            $session_data = [
                'customer_email' => auth()->user()->email,
                'client_reference_id' => auth()->user()->id,
                'payment_method_types' => $payment_method_types,
                'line_items' => $line_items,
                'mode' => 'payment',
                'metadata' => $metadata,
                'success_url' => $success_url,
                'cancel_url' => $cancel_url,
                'allow_promotion_codes' => true,
                'locale' => 'de',
                'payment_intent_data' => [
                    "metadata" => $metadata
                ]
            ];
            $session = \Stripe\Checkout\Session::create($session_data);
            $sessionId = $session['id'];
            $data['stripeKey'] = env('STRIPE_KEY');
            Session::forget('line_items');
        }
        $data['sessionId'] = $sessionId;

        return json_encode($data);
    }

    public function myCampaign($slug)
    {
        $user = auth()->user();

        if ($user->isCompany()) {
            abort(403);
        }

        $campaign = Campaign::where('slug', $slug)->where('status', 1)->first();

        $product = Product::find($campaign->influencer_product);

        $giveawayaddress = GiveawayAddress::where('campaign_id',$campaign->id)
            ->where('user_id',$user->id)
            ->first();

        if($giveawayaddress){
           $giveawayaddress = json_decode($giveawayaddress->address);
           $giveawayaddress_count = count($giveawayaddress);
        }
        else{
          $giveawayaddress = array();
          $giveawayaddress_count = 0;
        }

        $giveaway_count = $campaign->product_givaway_count ? $campaign->product_givaway_count : 0;


        $address_left = $giveaway_count - $giveawayaddress_count;

        $variations_selected = VariationSelection::where('user_id',$user->id)
            ->where('campaign_id',$campaign->id)
            ->where('product_id',$product->id)
            ->first();

        //dd($variations_selected);

        $variations = $product->variations;

        $baseUrl = $this->baseUrl;

        $images = CampaignImage::where('campaign_id', $campaign->id)->get();

        $hashtags = $campaign->hashtags ? $campaign->hashtags : null;
        if($hashtags) {
            $hashtags = json_decode($hashtags);
            $hashtags = explode(',', $hashtags);
        }

        $submissions = null;

        $steps = [];

        $coupon_code = false;

        $show_submission_form = false;

        if ($campaign->approve_influencer) {
            $steps[] = "Bestätigung ausstehend";
        }

        $steps[] = "In Bearbeitung";

        /*if (!$campaign->coupon_code) {
            $steps[] = "Versendet";
        } else {
            $coupon_code = true;
        }*/
        $steps[] = "Versendet";

        if ($campaign->coupon_code) {
            $coupon_code = true;
        }

        $steps[] = "Nachweis eingereicht";
        $steps[] = "Abgeschlossen";

        $campaignUser = $campaign->users->find(auth()->user()->id);

        $state_id = $campaignUser->pivot->state_id;

        if ($state_id == 4) {
            $submissions = json_decode($campaignUser->pivot->submission);
        }

        if ($state_id == 7) {
            $steps = array();
            $steps[] = "Abgelehnt";
        }

        $showCouponCode = $state_id !== 1 && $state_id !== 7 && $coupon_code;

        $state = CampaignState::find($state_id)->name;

        $state_key = array_search($state, $steps);

        if ($coupon_code && $state_id == 2 || !$coupon_code && $state_id == 3) {
            $show_submission_form = true;
        }

        /*return view('campaign.user.show', compact('campaign', 'images', 'steps', 'state_key', 'show_submission_form', 'submissions', 'showCouponCode', 'hashtags'));*/
        return view('campaign.show.show', compact('campaign', 'images', 'steps', 'state_key', 'show_submission_form', 'submissions', 'showCouponCode', 'hashtags','product','user','variations','baseUrl','variations_selected','address_left','giveawayaddress' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $company, $slug)
    {
        $user = auth()->user();

        $campaign = Campaign::where('slug', $slug)->where('status', 1)->first();

        $product = Product::find($campaign->influencer_product);

        $variations = $product->variations;
        $baseUrl = $this->baseUrl;
        $images = CampaignImage::where('campaign_id', $campaign->id)->get();
        $hashtags = $campaign->hashtags ? $campaign->hashtags : null;

        if ($hashtags) {
            $hashtags = json_decode($hashtags);
            $hashtags = explode(',', $hashtags);
        }
        $users = $campaign->users;

        if ($campaign->approve_influencer) {
                $steps[] = "Bestätigung ausstehend";
        }

        $steps[] = "In Bearbeitung";

        //if (!$campaign->coupon_code) {
            $steps[] = "Versendet";
        //}

        $steps[] = "Nachweis eingereicht";
        $steps[] = "Abgeschlossen";

        if ($user->isCompany()) {
            if ($campaign->company()->first()->id !== $user->company()->first()->id) {
                abort(403);
            }

            $vs = VariationSelection::where('product_id',$product->id)
                                    ->where('campaign_id',$campaign->id)
                                    ->get();
            $giveaway_address = GiveawayAddress::where('campaign_id',$campaign->id)->get();

            return view('campaign.show-company-abhi', compact('users', 'campaign', 'user', 'images', 'steps', 'hashtags','product','baseUrl','variations','vs','giveaway_address'));
        } else {
            if(!$user->hasChannels() || !$user->campaignCategories->contains('id', $campaign->campaign_category_id)) {
                return redirect()->route('campaign.index');
            }

            if (!$campaign->coupon_code && !$user->address) {
                $request->session()->put('campaign_redirect_url', url()->current());
            }

            $campaignUser = $campaign->users->find(auth()->user()->id);
            if(is_null($campaignUser))
            return view('campaign.show-abhi', compact('campaignUser','campaign', 'user', 'images','hashtags','product','baseUrl','variations'));
            else
                return $this->myCampaign($slug);



            $state_id = $campaignUser->pivot->state_id;

            if ($state_id == 4) {
                $submissions = json_decode($campaignUser->pivot->submission);
            }

            if ($state_id == 7) {
                $steps = array();
                $steps[] = "Abgelehnt";
            }
            $coupon_code = false;
            if ($campaign->coupon_code) {
                $coupon_code = true;
            }
            $showCouponCode = $state_id !== 1 && $state_id !== 7 && $coupon_code;

            $state = CampaignState::find($state_id)->name;

            $state_key = array_search($state, $steps);
        }

        return view('campaign.show-abhi', compact('campaignUser','campaign', 'user', 'images', 'steps', 'state_key','hashtags','product','baseUrl','variations'));
        /*return view('campaign.show-abhi', compact('users', 'campaign', 'user', 'images', 'steps', 'hashtags','product','baseUrl','variations'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = auth()->user();

        $campaign = Campaign::where('slug', $slug)->where('status', 1)->first();

        if ($campaign->company->id !== $user->company->id) {
            abort(403);
        }

        $categories = CampaignCategory::all();

        return view('campaign.edit', compact('campaign', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $campaign = Campaign::where('slug', $slug)->where('status', 1)->first();

        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // $validate['slug'] = Str::slug($validate['title']);
        $validate['slug'] = $this->createSlug($validate['title'], $campaign->id);

        $campaign->update($validate);

        return redirect()->route('campaign.show', [$campaign->company->slug, $campaign->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy($companySlug, $campaignSlug)
    {
        $user = auth()->user();

        $campaign = Campaign::where('slug', $campaignSlug)->first();

        if ($campaign->company()->first()->id !== $user->company()->first()->id) {
            abort(403);
        }

        $campaign->delete();

        return redirect()->route('user.campaign.index');
    }

    public function filter(Request $request)
    {
        // dd($_GET['category']);
        $user = auth()->user();
        $categories = CampaignCategory::all();
        $selectedCategories = [];
        $userSelectedCategpries = auth()->user()->campaignCategories()->pluck('campaign_category_id')->toArray();
        if (!$request->has('category')) {
            return view('campaign.index', compact('campaigns', 'user', 'categories', 'selectedCategories'));
        } else {
            $selectedCategories = $request->category;
            $campaigns = Campaign::whereIn('campaign_category_id', $selectedCategories)->where('status', 1);
        }

        if ($request->has('s')) {
            $searchquery = $request->s;
            $campaigns = $campaigns->whereHas('company', function ($query) use ($searchquery) {
                $query->where('name', 'like', '%' . $searchquery . '%');
            })
                ->orWhere('title', 'like', '%' . $searchquery . '%')
                ->orWhere('description', 'like', '%' . $searchquery . '%')
                ->orderBy('created_at')
                ->paginate(24);

            return view('campaign.index', compact('campaigns', 'user', 'categories', 'searchquery', 'selectedCategories', 'userSelectedCategpries'));
        }

        $campaigns = $campaigns->paginate(24);

        return view('campaign.index', compact('campaigns', 'user', 'categories', 'selectedCategories', 'userSelectedCategpries'));
    }

    public function pay(Request $request)
    {


        $shipping = 7.40; //7,40 Shipping per one package

        $numberOfInfluencer = $request->numberOfInfluencer;

        $custom_packaging = $request->custom_packaging == "true" ? 22 : 0; //22€ per Influencer

        $customer_ceil = ceil($numberOfInfluencer / 30);

        $custom_packaging_sum = $customer_ceil * $custom_packaging;

        if($request->campaign_type == 2){
            $giveaway_numberOfInfluencer = ($request->product_givaway_count * $numberOfInfluencer) + $numberOfInfluencer;
            $sum = ($giveaway_numberOfInfluencer * $shipping) + $custom_packaging_sum;
        }
        else
          $sum = ($numberOfInfluencer * $shipping) + $custom_packaging_sum;

        $tax_rate = 0.16;

        $tax_up = $sum * $tax_rate;

        $total = $sum + $tax_up;

        $sum = round($sum, 2);

        $total = round($total, 2);

        $tax = round($tax_up, 2);

        /*
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $intent = PaymentIntent::create([
            'amount' => $total * 100,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);
        */
        try{
            $line_items = [];
            if($shipping != 0 && $numberOfInfluencer != 0){
                $set = [];
                $set['name'] = "Versand (pro Paket)";
                $set['amount'] = round($shipping * 100);
                $set['currency'] = 'eur';
                $set['quantity'] = $numberOfInfluencer;
                array_push($line_items, $set);
            }
            if($customer_ceil != 0 && $custom_packaging){
                $set = [];
                $set['name'] = "Individuelle Verpackung (pro 30 Influencer)Es wird immer aufgerundet.";
                $set['amount'] = round($customer_ceil * 100);
                $set['currency'] = 'eur';
                $set['quantity'] = $custom_packaging;
                array_push($line_items, $set);
            }
            if($tax_up != 0){
                $set = [];
                $set['name'] = "Steuer";
                $set['amount'] = round($tax_up * 100);
                $set['currency'] = 'eur';
                $set['quantity'] = 1;
                array_push($line_items, $set);
            }
            Session::put('line_items', $line_items);
        }catch(\Exception $e){
            $sessionId = $e->getCode()." ".$e->getMessage();
        }
        if($request->campaign_type == 2)
           $numberOfInfluencer = $giveaway_numberOfInfluencer;
        $json = json_encode(
            array(
                'custom_packaging' => $custom_packaging,
                'shipping' => $shipping,
                'numberOfInfluencer' => $numberOfInfluencer,
                //'client_secret' => $intent->client_secret,
                //'client_name' => auth()->user()->firstname . ' ' . auth()->user()->lastname,
                'sum' => $sum,
                'tax' => $tax,
                'total' => $total,
            )
        );

        return $json;
    }

    protected function createSlug($title, $id = 0)
    {
        $slug = Str::slug($title, '-');

        $allSlugs = $this->getRelatedSlugs($slug, $id);

        $existingSlugs = count($allSlugs);

        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        for ($i = 1; $i <= $existingSlugs; ++$i) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Cannot create unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Campaign::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '!=', $id)
            ->where('status', 1)
            ->get();
    }

    public function campainSuccess(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session_id = $request->get('session_id');
        $session = \Stripe\Checkout\Session::retrieve($session_id);
        $payment_intent_id = $session['payment_intent'];
        $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);
        $charges_data = $payment_intent['charges']['data'][0];
        $is_success = $charges_data['status'];
        if(Session::has('campaign_id')){
            $campaign_id = Session::get('campaign_id');
            Campaign::where('id', $campaign_id)->update([ 'status' => 1 ]);
        }
        return redirect()->to(route('campaign.create', ['product', 'payment']));
    }
    public function campainCancel(){

       return redirect()->to(route('campaign.create', ['product']));
    }
}
