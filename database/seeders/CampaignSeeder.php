<?php
namespace Database\Seeders;

use App\Campaign;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfCampaigns = 50;
        for ($i = 0; $i <= $numberOfCampaigns; $i++) {
            $faker = Faker::create();
            $title = $faker->sentence();
            $coupon_code = rand(0, 1) == 1 ? 'CODE20' : NULL;
            Campaign::create([
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'description' => $faker->text(350),
                'coupon_code' => $coupon_code,
                'campaign_type' => rand(1, 3),
                'campaign_description' => $faker->text(350),
                'publication_period_from' => date('Y-m-d'),
                'publication_period_to' => date('Y-m-d'),
                'account_to_tag' => 'account',
                'influencer_product' => 1,
                'youtube' => true,
                'twitch' => false,
                'instagram' => false,
                'influencer_quantity' => rand(1, 1200),
                'approve_influencer' => rand(0, 1) == 1,
                'shipping_by_company' => rand(0, 1) == 1,
                'target_audience_id' => rand(1, 2),
                'company_id' => rand(1, 2),
                'campaign_category_id' => rand(1, 16),
            ]);
        }
    }
}
