<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignActivity;
use App\CampaignActivityEvent;
use App\Company;
use App\Events\MessageSent;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = auth()->user();

        $campaigns = $currentUser->campaigns->take(5);

        $newsArray = [];

        if (!$currentUser->isCompany()) {

            $userSelectedCategories = $currentUser->campaignCategories()->pluck('campaign_category_id')->toArray();

    $newCampaigns = Campaign::applicable()->age($currentUser->birthday)->state($currentUser->state)
                ->where(function ($query) use ($userSelectedCategories) {
                    $query->whereIn('campaign_category_id', $userSelectedCategories);
                })
                ->where('status', 1)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();

            $news = CampaignActivity::where('user_id', $currentUser->id)
                ->whereIn('campaign_activity_id', [3, 4, 5, 7])
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();

            foreach ($news as $newsItem) {
                $text = $this->generateText(
                    $newsItem->campaign_activity_id,
                    $newsItem->user_id,
                    $newsItem->campaign_id,
                    $newsItem->company_id,
                    'influencer',
                );
                $type = CampaignActivityEvent::find($newsItem->campaign_activity_id);

                $newsArray[] = [
                    'type' => $type->name,
                    'text' => $text,
                    'timestamp' => $newsItem->created_at,
                ];
            }
        } else {
            $campaignActivities = CampaignActivity::where('company_user_id', $currentUser->id)->orderBy('created_at', 'desc')->get();

            $newCampaigns = $currentUser->company->campaigns()->where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();

            $news = CampaignActivity::where('company_user_id', $currentUser->id)
                ->whereIn('campaign_activity_id', [1, 2])
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();

            foreach ($news as $newsItem) {
                $text = $this->generateText(
                    $newsItem->campaign_activity_id,
                    $newsItem->user_id,
                    $newsItem->campaign_id,
                    $newsItem->company_id,
                    'company',
                );
                $type = CampaignActivityEvent::find($newsItem->campaign_activity_id);

                $newsArray[] = [
                    'type' => $type->name,
                    'text' => $text,
                    'timestamp' => $newsItem->created_at,
                ];
            }
        }

        return view('dashboard', compact('currentUser', 'campaigns', 'newCampaigns', 'newsArray'));
    }

    private function generateText($activity_id, $user_id = NULL, $campaign_id, $company_id, $userToNotify)
    {
        $user = User::find($user_id);
        $profileRoute =  route("influencer.profile", $user->slug);
        $campaign = Campaign::where('status', 1)->where('id',$campaign_id)->first();
        $submission = $user->campaigns()->find($campaign->id)->pivot->submission;
        $company = Company::find($company_id);
        $campaignRoute = $userToNotify == "company" ? route('campaign.show', [$company->slug, $campaign->slug]) : route('user.campaign.show', $campaign->slug);

        if ($activity_id == 1) {
            $text = '<a href="' . $profileRoute . '">' . $user->firstname . ' ' . $user->lastname . '</a> hat sich auf die Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> beworben.';
        } elseif ($activity_id == 2) {
            $text = '<a href="' . $profileRoute . '">' . $user->firstname . ' ' . $user->lastname . '</a> hat hat einen Nachweis</a> für eingereicht für die Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> eingereicht.';
        } elseif ($activity_id == 3) {
            $text = $company->name . ' hat deine Bewerbung auf die Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> abgelehnt.';
        } elseif ($activity_id == 4) {
            $text = $company->name . ' hat deine Bewerbung auf die Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> angenommen.';
        } elseif ($activity_id == 5) {
            $text = $company->name . ' hat die Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> als geschlossen markiert.';
        } elseif ($activity_id == 7) {
            $text = $company->name . ' hat das Produkt der Kampange <a href="' . $campaignRoute . '">' . $campaign->title . '</a> als versandt markiert.';
        }

        return $text;
    }
}
