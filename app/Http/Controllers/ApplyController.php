<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignActivity;
use App\Chatroom;
use App\Mail\InfluencerApplied;
use App\Message;
use App\ProfileAccess;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplyController extends Controller
{
    public function send(Request $request)
    {
        $campaign = Campaign::where('slug', $request['campaign_slug'])->where('status', 1)->first();

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

        $this->sendMessageEvent( $message );

        Mail::to($receiver->email)->send(new InfluencerApplied($campaign, $receiver, $sender));

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

        return redirect()->route('user.campaign.show', $campaign->slug);
    }

    private function sendMessageEvent( Message $message ) 
    {
        $message->sendNotification();
    }

    public function approve(Request $request)
    {
        $user_id = $request['applicant'];
        $campaign_id = $request['campaign_id'];

        $msg_type = 'approvement';

        $campaign = Campaign::where('id', $campaign_id)->where('status', 1)->first();

        $msg = "Du wurdest für die Kampagne: " . $campaign->title . " angenommen.";

        $user = User::where('id', $user_id)->first();

        $user_campaign = $user->campaigns()->find($campaign_id);
        $user_campaign->pivot->state_id = 2;
        $user_campaign->pivot->approved = true;
        $user_campaign->pivot->save();

        //change type of enquiry message, so that the buttons are not shown again
        $enquiry_msg = Message::where('id', $request['message']['id'])->first();
        $enquiry_msg->type = 'approved';
        $enquiry_msg->save();

        CampaignActivity::create([
            'campaign_activity_id' => 4,
            'user_id' => $user->id,
            'campaign_id' => $campaign->id,
            'company_id' => $campaign->company->id,
            'company_user_id' => $campaign->company->user->id,
        ]);

        $message = Message::create([
            'chatroom_id' => $request['chatroom_id'],
            'user_id' => $request['company_user'],
            'type' => $msg_type,
            'campaign_id' => $campaign_id,
            'content' => $msg,
        ]);

        $this->sendMessageEvent( $message );

        return 200;
    }

    public function decline(Request $request)
    {
        $user_id = $request['applicant'];
        $campaign_id = $request['campaign_id'];

        $msg_type = 'dismissal';

        $campaign = Campaign::where('id', $campaign_id)->where('status', 1)->first();

        $msg = "Du wurdest für die Kampagne: " . $campaign->title . " abgelehnt.";

        $user = User::where('id', $user_id)->first();

        CampaignActivity::create([
            'campaign_activity_id' => 3,
            'user_id' => $user->id,
            'campaign_id' => $campaign->id,
            'company_id' => $campaign->company->id,
            'company_user_id' => $campaign->company->user->id,
        ]);

        $user_campaign = $user->campaigns()->find($campaign_id);
        $user_campaign->pivot->state_id = 7;
        $user_campaign->pivot->approved = false;
        $user_campaign->pivot->save();

        //change type of enquiry message, so that the buttons are not shown again
        $enquiry_msg = Message::where('id', $request['message']['id'])->first();
        $enquiry_msg->type = 'dismissed';
        $enquiry_msg->save();

        $message = Message::create([
            'chatroom_id' => $request['chatroom_id'],
            'user_id' => $request['company_user'],
            'type' => $msg_type,
            'campaign_id' => $campaign_id,
            'content' => $msg,
        ]);

        $this->sendMessageEvent( $message );

        return 200;
    }
}