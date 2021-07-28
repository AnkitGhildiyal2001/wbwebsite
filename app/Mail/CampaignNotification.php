<?php

namespace App\Mail;

use App\Campaign;
use App\CampaignState;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaignNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $campaign;
    protected $receiver;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Campaign $campaign,$receiver)
    {
        $this->campaign = $campaign;
        $this->receiver = $receiver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Eine neue Kamapgne wartet auf dich,".$this->receiver->firstname."  | WunderBrudis")
            ->view('emails.campaigns.posted')
            ->with([
                'name' => $this->receiver->firstname . ' ' . $this->receiver->lastname,
                'campaignTitle' => $this->campaign->title,
                'campaignSlug' => $this->campaign->slug
            ]);
    }
}
