<?php

namespace App\Listeners;

use App\CampaignActivity;
use App\Events\CampaignCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CampaignCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CampaignCreated  $event
     * @return void
     */
    public function handle(CampaignCreated $event)
    {
    }
}
