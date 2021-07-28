<?php
namespace Database\Seeders;

use App\CampaignState;
use Illuminate\Database\Seeder;

class CampaignStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'Bestätigung ausstehend',
            'In Bearbeitung',
            'Versendet',
            'Nachweis eingereicht',
            'Klärungsbedarf',
            'Abgeschlossen',
            'Abgelehnt',
        ];

        foreach ($states as $state) {
            CampaignState::create(['name' => $state,]);
        }
    }
}
