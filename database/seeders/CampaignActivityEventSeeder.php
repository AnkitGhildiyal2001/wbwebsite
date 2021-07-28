<?php
namespace Database\Seeders;

use App\CampaignActivityEvent;
use Illuminate\Database\Seeder;

class CampaignActivityEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campaignActivityEvents = [
            'applied',
            'submitted',
            'declined',
            'approved',
            'closed',
            'created',
            'shipped',
        ];

        foreach ($campaignActivityEvents as $event) {
            CampaignActivityEvent::create(['name' => $event]);
        }
    }
}
