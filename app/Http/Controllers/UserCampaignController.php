<?php

namespace App\Http\Controllers;

use App\Product;
use App\Chatroom;
use App\Campaign;
use App\CampaignImage;
use App\CampaignState;
use App\GiveawayAddress;
use App\CampaignActivity;
use App\Events\MessageSent;
use App\VariationSelection;
use App\Mail\CampaignStateUpdated;
use App\Message;
use App\Notifications\MessageReceived;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserCampaignController extends Controller
{   
    private $baseUrl = "https://wb-productimages.s3.eu-central-1.amazonaws.com/";
    //private $baseUrl = "http://localhost:8000/images/";

    public function index(Request $request)
    {
        $user = auth()->user();

        $isCompany = $user->isCompany();

        $searchquery = $request->s ? $request->s : null;

        if ($isCompany) {
            $company = $user->company()->first();

            if ($request->has('s')) {
                $campaigns = $company->campaigns()->where(function ($query) use ($searchquery) {
                    $query->where('title', 'like', '%' . $searchquery . '%')
                        ->orWhere('description', 'like', '%' . $searchquery . '%');
                })->where('status', 1)->paginate(24);
            } else {
                $campaigns = $company->campaigns()->where('status', 1)->paginate(24);
            }
        } else {
            if ($request->has('s')) {
                $campaigns = auth()->user()->campaigns()->where(function ($query) use ($searchquery) {
                    $query->whereHas('company', function ($query) use ($searchquery) {
                        $query->where('name', 'like', '%' . $searchquery . '%');
                    })
                        ->orWhere('title', 'like', '%' . $searchquery . '%')
                        ->orWhere('description', 'like', '%' . $searchquery . '%');
                })
                ->where('status', 1)
                    ->orderBy('created_at')
                    ->paginate(24);
            } else {
                $campaigns = auth()->user()->campaigns()->where('status', 1)->paginate();
            }
        }

        return view('campaign.user.index', compact('campaigns', 'user', 'searchquery'));
    }

    public function show($slug)
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

    public function setState(Request $request, $campaignSlug, $influencerSlug, $nextStateName)
    {
        $influencer = User::where('slug', $influencerSlug)->first();

        $campaign = Campaign::where('slug', $campaignSlug)->where('status', 1)->first();

        $state = CampaignState::where('name', $nextStateName)->first();

        $campaignUser = $campaign->users->find($influencer->id);

        $campaignUser->pivot->state_id = $state->id;
        $campaignUser->pivot->save();

        if ($state->id !== 4) {
            Mail::to($influencer->email)->send(new CampaignStateUpdated($campaign, $state, $influencer));
        }

        if ($campaignUser->pivot->state_id == 3 ) {
            CampaignActivity::create([
                'campaign_activity_id' => 7,
                'user_id' => $influencer->id,
                'campaign_id' => $campaign->id,
                'company_id' => $campaign->company->id,
                'company_user_id' => $campaign->company->user->id,
            ]);
            $messageContent = 'Ihre Kampagne '.$campaign->title.' wurde versendet';
        } else if( $state->id == 6 ) {
          $messageContent = 'Die Kampagne '.$campaign->title.' wurde abgeschlossen';
        }

        if( $state->id == 6 || $campaignUser->pivot->state_id == 3 ) {
          $hasChatroom = Message::where('campaign_id', $campaign->id)->first();
          if( !$hasChatroom ) {
            $chatRoomId = $this->getInfluncerChatId( $influencer, $campaign->company->user->id  );
          } else {
            $chatRoomId = $hasChatroom->chatroom_id;
          }

          $message = Message::create([
              'chatroom_id' => $chatRoomId,
              'user_id' => $influencer->id,
              'type' => 'shipped',
              'campaign_id' => $campaign->id,
              'content' => $messageContent,
          ]);
          $this->sendMessageEvent( $message );
        }

        return back();
    }

    public function acceptInfluencer(Request $request, $campaignSlug, $influencerSlug)
    {
        $influencer = User::where('slug', $influencerSlug)->first();

        $campaign = Campaign::where('slug', $campaignSlug)->where('status', 1)->first();

        $company_user = auth()->user();

        $msg = "Du wurdest für die Kampagne: " . $campaign->title . " angenommen.";
        $msg_type = 'approvement';

        $user_campaign = $influencer->campaigns()->find($campaign->id);
        $user_campaign->pivot->state_id = 2;
        $user_campaign->pivot->approved = true;
        $user_campaign->pivot->save();

        $state = CampaignState::find(2);

        $enquiry_msg = Message::where('campaign_id', $campaign->id)
            ->where('type', 'enquiry')
            ->first();

        $enquiry_msg->type = 'approved';
        $enquiry_msg->save();

        Mail::to($influencer->email)->send(new CampaignStateUpdated($campaign, $state, $influencer));

        CampaignActivity::create([
            'campaign_activity_id' => 4,
            'user_id' => $influencer->id,
            'campaign_id' => $campaign->id,
            'company_id' => $campaign->company->id,
            'company_user_id' => $company_user->id,
        ]);

        //create message
        $message = Message::create([
            'chatroom_id' => $enquiry_msg->chatroom_id,
            'user_id' => $company_user->id,
            'type' => $msg_type,
            'campaign_id' => $campaign->id,
            'content' => $msg,
        ]);

        $this->sendMessageEvent( $message );

        return back();
    }

    public function declineInfluencer(Request $request, $campaignSlug, $influencerSlug)
    {
        $influencer = User::where('slug', $influencerSlug)->first();

        $company_user = auth()->user();

        $campaign = Campaign::where('slug', $campaignSlug)->where('status', 1)->first();

        $msg = "Du wurdest für die Kampagne: " . $campaign->title . " abgelehnt.";
        $msg_type = 'dismissal';

        $user_campaign = $influencer->campaigns()->find($campaign->id);
        $user_campaign->pivot->state_id = 7;
        $user_campaign->pivot->approved = false;
        $user_campaign->pivot->save();

        $state = CampaignState::find(7);

        $enquiry_msg = Message::where('campaign_id', $campaign->id)
            ->where('type', 'enquiry')
            ->first();

        $enquiry_msg->type = 'dismissed';
        $enquiry_msg->save();

        Mail::to($influencer->email)->send(new CampaignStateUpdated($campaign, $state, $influencer));

        CampaignActivity::create([
            'campaign_activity_id' => 3,
            'user_id' => $influencer->id,
            'campaign_id' => $campaign->id,
            'company_id' => $campaign->company->id,
            'company_user_id' => $company_user->id,
        ]);

        //create message
        $message = Message::create([
            'chatroom_id' => $enquiry_msg->chatroom_id,
            'user_id' => $company_user->id,
            'type' => $msg_type,
            'campaign_id' => $campaign->id,
            'content' => $msg,
        ]);

        $this->sendMessageEvent( $message );

        return back();
    }

    private function sendMessageEvent( Message $message ) 
    {
        $message->sendNotification();
    }

    public function submitPost(Request $request, $campaignSlug, $influencerSlug)
    {
        $influencer = User::where('slug', $influencerSlug)->first();

        $campaign = Campaign::where('slug', $campaignSlug)->where('status', 1)->first();

        $company = $campaign->company;

        $company_user = $company->user;

        $urls = json_encode($request['submission']);

        $chatroom_id = null;

        $user_campaign = $influencer->campaigns()->find($campaign->id);
        $user_campaign->pivot->submission = $urls;
        $user_campaign->pivot->state_id = 4;
        $user_campaign->pivot->save();

        $state = CampaignState::find(4);

        $message = 'Nachweis eingereicht für die Kampagne "'  . $campaign->title . '". URLs zu den Posts: ';
        foreach($request['submission'] as $key => $url) {
            if ($key === array_key_last($request['submission'])) {
                $message .= $url . '.';
            } else {
                $message .= $url . ', ';
            }
        }

        $influencerChatrooms = $influencer->chatrooms()->get();

        foreach ($influencerChatrooms as $chatroom) {
            $chatroomUsers = $chatroom->members()->get();
            if ($chatroomUsers->contains(User::find($company_user->id))) {
                $chatroom_id = $chatroom->id;
            }
        }

        if ($chatroom_id == null) {
            $chatroom = Chatroom::create();
            $chatroom_id = $chatroom->id;

            $chatroom->members()->attach([
                $influencer->id,
                $company_user->id,
            ]);
        }

        Mail::to($company_user->email)->send(new CampaignStateUpdated($campaign, $state, $influencer, true));

        $message = Message::create([
            'chatroom_id' => $chatroom_id,
            'user_id' => $influencer->id,
            'type' => 'submission',
            'campaign_id' => $campaign->id,
            'content' => $message,
        ]);

        $this->sendMessageEvent( $message );

        CampaignActivity::create([
            'campaign_activity_id' => 2,
            'user_id' => $influencer->id,
            'campaign_id' => $campaign->id,
            'company_id' => $company->id,
            'company_user_id' => $company_user->id,
        ]);

        return back();
    }


    public function getInfluncerChatId( $influencer, $userId ) 
    {
      $chatroom_id = null;
      $influencerChatrooms = $influencer->chatrooms()->get();

      foreach ($influencerChatrooms as $chatroom) {
          $chatroomUsers = $chatroom->members()->get();
          if ($chatroomUsers->contains(User::find($influencer->id))) {
              $chatroom_id = $chatroom->id;
          }
      }

      if ($chatroom_id == null) {
          $chatroom = Chatroom::create();
          $chatroom_id = $chatroom->id;

          $chatroom->members()->attach([
              $influencer->id,
              $userId,
          ]);
      }

      return $chatroom_id;
    }
}