<?php

namespace App\Mail;

use App\Campaign;
use App\CampaignState;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaignStateUpdated extends Mailable
{
    use Queueable, SerializesModels;

    protected $campaign;
    protected $state;
    protected $receiver;
    protected $fromInfluencer;
    protected $influencer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Campaign $campaign, CampaignState $state, User $receiver, $fromInfluencer = false, User $influencer = null)
    {
        $this->campaign = $campaign;
        $this->state = $state;
        $this->receiver = $receiver;
        $this->fromInfluencer = $fromInfluencer;
        $this->influencer = $influencer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $influencerName = $this->influencer != null ?
            ($this->influencer->firstname . ' ' . $this->influencer->lastname) : '';
        return $this->subject("Wunderbrudis: Kampagnenstatus wurde aktualisiert")
            ->view('emails.campaigns.updated')
            ->with([
                'name' => $this->receiver->firstname . ' ' . $this->receiver->lastname,
                'campaignTitle' => $this->campaign->title,
                'campaignSlug' => $this->campaign->slug,
                'campaignState' => $this->state->name,
                'fromInfluencer' => $this->fromInfluencer,
                'influencerName' => $influencerName,
            ]);
    }
}
