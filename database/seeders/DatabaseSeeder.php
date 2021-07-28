<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CampaignCategorySeeder::class);
        $this->call(CampaignTypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CampaignSeeder::class);
        $this->call(CampaignStateSeeder::class);
        $this->call(ChatroomSeeder::class);
        $this->call(ProfileAccessSeeder::class);
        $this->call(CampaignActivityEventSeeder::class);
        $this->call(PlanSeeder::class);
    }
}
