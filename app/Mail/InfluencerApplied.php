<?php

namespace App\Mail;

use App\Campaign;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfluencerApplied extends Mailable
{
    use Queueable, SerializesModels;

    protected $campaign;
    protected $user;
    protected $influencer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Campaign $campaign, User $user, User $influencer)
    {
        $this->campaign = $campaign;
        $this->user = $user;
        $this->influencer = $influencer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $approveText = $this->campaign->approve_influencer ? "Um den Influencer für diese Kampagne freizugeben gehe auf die Kampagnenseite in den Tab Influencer." : "";

        return $this->subject("WunderBrudis: Influencer beworben")
            ->view('emails.campaigns.applied')
            ->with([
                'name' => $this->user->firstname . ' ' . $this->user->lastname,
                'influencerName' => $this->influencer->firstname . ' ' . $this->influencer->lastname,
                'campaignTitle' => $this->campaign->title,
                'approveText' => $approveText,
                'campaignSlug' => $this->campaign->slug,
            ]);
    }
}
