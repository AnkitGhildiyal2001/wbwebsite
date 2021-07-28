<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Plan;

class PlanSeeder extends Seeder

{
    public function run()
    {
        $plans = [

            [
                'id'             => 1,
                'name'          => 'Startup',
                'stripe_plan_id' => config('app.startup'),
                'price'          => 39900,
                'max_users'      => 25
            ],
            [
                'id'             => 2,
                'name'          => 'Grow',
                'stripe_plan_id' => config('app.grow'),
                'price'          => 69900,
                'max_users'      => 75
            ],
            [
                'id'             => 3,
                'name'          => 'Ultimate',
                'stripe_plan_id' => config('app.ultimate'),
                'price'          => 99900,
                'max_users'      => 201
            ],
        ];

        Plan::insert($plans);

    }
}
