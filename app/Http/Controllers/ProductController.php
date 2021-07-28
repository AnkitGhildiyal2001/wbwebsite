<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Message;
use App\Campaign;
use App\Chatroom;
use App\ProfileAccess;
use App\CampaignActivity;
use App\VariationSelection;
use Illuminate\Http\Request;
use App\Mail\InfluencerApplied;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private function sendMessageEvent( Message $message )
    {
        $message->sendNotification();
    }
    private function send($id)
    {
        $campaign = Campaign::where('id', $id)->where('status', 1)->first();

        $company = $campaign->company()->first();

        $sender = auth()->user();

        ProfileAccess::firstOrCreate([
            'company_id' => $company->id,
            'user_id' => $sender->id,
        ]);

        $receiver = $company->user()->first();

        $senderChatrooms = $sender->chatrooms()->get();

        $chatroom_id = null;

        if ($senderChatrooms->count() > 0) {
            //bestehenden chatroom holen, welchen den sender und den receiver enthält
            foreach ($senderChatrooms as $chatroom) {
                $chatroomUsers = $chatroom->members()->get();
                if ($chatroomUsers->contains(User::find($receiver->id))) {
                    $chatroom_id = $chatroom->id;
                }
            }
        }

        if ($chatroom_id == null) {
            $chatroom = Chatroom::create();
            $chatroom_id = $chatroom->id;

            $chatroom->members()->attach([
                $sender->id,
                $receiver->id,
            ]);
        }

        $applyMessage = "Bewerbung von " . $sender->firstname . " " . $sender->lastname . " auf die Kampagne: " . $campaign->title;

        $type = $campaign->approve_influencer ? 'enquiry' : 'msg';

        $message = Message::create([
            'chatroom_id' => $chatroom_id,
            'user_id' => $sender->id,
            'type' => $type,
            'campaign_id' => $campaign->id,
            'content' => $applyMessage,
        ]);

        //$this->sendMessageEvent( $message );

        //Mail::to($receiver->email)->send(new InfluencerApplied($campaign, $receiver, $sender));

        $state = $campaign->approve_influencer ? 1 : 2;

        //aprove influencer
        if ($campaign->approve_influencer) {
            $state = 1;
        }
        // influencer doesnt need to be approved
        else {
            $state = 2;
        }

        $sender->campaigns()->attach([
            $campaign->id
        ]);

        $user_campaign = $sender->campaigns()->find($campaign->id);
        $user_campaign->pivot->state_id = $state;
        $user_campaign->pivot->save();

        CampaignActivity::create([
            'campaign_activity_id' => 1,
            'user_id' => $sender->id,
            'campaign_id' => $campaign->id,
            'company_id' => $company->id,
            'company_user_id' => $receiver->id,
        ]);

    }//https://wunderbrudis.dev/kampagne/mustermann-gmbh/illo-amet-iure-quaerat-iure-cum-quod-architecto-iste#
    public function variant_selection_save(Request $request){

    $uid = Auth::user()->id;
    $vs = VariationSelection::where('user_id',$uid)
    ->where('product_id',$request->productId)
    ->where('campaign_id',$request->campaignId)
    ->first();
        if($vs){}
         else
        $vs = new VariationSelection;
    $vs->user_id = $uid;
    $vs->product_id = $request->productId;
    $vs->variant = $request->data;
    $vs->campaign_id = $request->campaignId;
    $vs->save();

    $this->send($request->campaignId);
    /*if($request->count){
        $campaign = Campaign::find($request->productId);
        $campaign->
    }*/
    return response()->json(['vs_id' => $vs->id], 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = auth()->user()->company;
        $products = Product::where('company_id', $company->id)->paginate(10);

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = \Validator::make(
            $request->all(), [
                'name' => 'required',
                'image_product' => 'required',
                'variation' => 'required',
                'quantity' => 'required',
                'image' => 'required',
            ]
        );
        if($validator->fails())
        {
            return response()->json(['status' => 'error', 'error' => 'Please enter all fields.' ]);
        }

        // $bucket = 'wb-productimages';
        // Config::set('filesystems.disks.s3.bucket', $bucket);

        $company = auth()->user()->company;
        $company_slug = auth()->user()->company->slug;

        $time = time();
        if ($request->hasFile('image_product')) {
            $file = $request->file('image_product');
            $name = $file->getClientOriginalName();
            $path_image_product = $company_slug.'/'.$time.$name;
            // $file->storeAs($company_slug . '/', $time . $name);

            Storage::disk('digitalocean')->putFileAs('upload_images', $file, $company_slug.'/'.$time.$name, 'public');
        }

        $colors = $request->variation;
        $quantities = $request->quantity;
        $variations = array();

        for($i = 0; $i < count($colors); $i++) {

            if ($request->hasFile('image')) {
                $time = time();
                $variant_file = $request->file('image')[$i] ;
                $name_variant = $variant_file->getClientOriginalName();
                $path_image_variant = $company_slug.'/'.$i.'-'.$time.$name;
                // $variant_file->storeAs($company_slug . '/', $time . $name_variant);

                Storage::disk('digitalocean')->putFileAs('upload_images', $variant_file, $company_slug.'/'.$i.'-'.$time .$name, 'public');
            }
            $variation = [
                'variation' => $colors[$i],
                'quantity' => $quantities[$i],
                'image' => $path_image_variant
            ];
            array_push($variations,$variation);
        }

        Product::create([
            'name' => $request->name,
            'image_product' => $path_image_product,
            'variations' => json_encode($variations),
            'company_id' => $company->id
        ]);

        return response()->json(['status' => 'success','error' => '']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $product = Product::findOrFail($id);
       $path_image_product = $product->image_product;
       $validator = \Validator::make(
            $request->all(), [
                'name' => 'required',
                'variation' => 'required',
                'quantity' => 'required',
            ]
        );
        if($validator->fails())
        {
            return redirect('product');
        }
        $bucket = 'wb-productimages';
        Config::set('filesystems.disks.s3.bucket', $bucket);
        $company_slug = auth()->user()->company->slug;

        $colors = $request->variation;
        $quantities = $request->quantity;
        $images = $request->image;


        $time = time();
        if ($request->hasFile('image_product')) {
            $file = $request->file('image_product');
            $name = $file->getClientOriginalName();
            $path_image_product = $company_slug . '/'. $time . $name;
            $file->storeAs($company_slug . '/', $time . $name);
        }

        $variations = array();
        for($i = 0; $i < count($colors); $i++) {
            if (isset($product->variations[$i])) {
                $path_image_variant = $product->variations[$i]->image;
            }
            if ($request->hasFile('image')) {
                $time = time();
                $file_array = $request->file('image');
                if (isset($file_array[$i])) {
                    $variant_file = $file_array[$i];
                    $name_variant = $variant_file->getClientOriginalName();
                    $path_image_variant = $company_slug . '/'. $time . $name_variant;
                    $variant_file->storeAs($company_slug . '/', $time . $name_variant);
                }
            }

            $variation = [
                'variation' => $colors[$i],
                'quantity' => $quantities[$i],
                'image' => $path_image_variant
            ];
            array_push($variations,$variation);
        }

        $product->fill([
            'name' => $request->name,
            'image_product' => $path_image_product,
            'variations' => json_encode($variations),
        ])->save();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('product');
    }



    public function deletevariant()
    {
        $id_product = $_GET['id'];
        $id_var = $_GET['id_var'];
        $product = Product::findOrFail($id_product);
        $variation =(array) $product->variations;
        unset($variation[$id_var]);
        $product->fill([
            'variations' => json_encode($variation),
        ])->save();

        return redirect('product');
    }

}
