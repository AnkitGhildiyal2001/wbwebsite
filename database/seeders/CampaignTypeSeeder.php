<?php
namespace Database\Seeders;

use App\CampaignType;
use Illuminate\Database\Seeder;

class CampaignTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
          'Product Placement',
          'Giveaway',
          'Affiliate Link',
        ];

        foreach($types as $type) {
          CampaignType::create(['name' => $type,]);
        }
    }
}
