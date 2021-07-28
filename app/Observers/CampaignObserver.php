<?php

namespace App\Observers;

use App\Campaign;

class CampaignObserver
{
    /**
     * Handle the campaign "created" event.
     *
     * @param  \App\Campaign  $campaign
     * @return void
     */
    public function created(Campaign $campaign)
    {
        //
    }

    /**
     * Handle the campaign "updated" event.
     *
     * @param  \App\Campaign  $campaign
     * @return void
     */
    public function updated(Campaign $campaign)
    {
        //
        $users = $campaign->users()->pluck('id')->toArray();
        dd($users);
    }

    /**
     * Handle the campaign "deleted" event.
     *
     * @param  \App\Campaign  $campaign
     * @return void
     */
    public function deleted(Campaign $campaign)
    {
        //
    }

    /**
     * Handle the campaign "restored" event.
     *
     * @param  \App\Campaign  $campaign
     * @return void
     */
    public function restored(Campaign $campaign)
    {
        //
    }

    /**
     * Handle the campaign "force deleted" event.
     *
     * @param  \App\Campaign  $campaign
     * @return void
     */
    public function forceDeleted(Campaign $campaign)
    {
        //
    }
}
