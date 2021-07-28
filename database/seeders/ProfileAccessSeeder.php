<?php
namespace Database\Seeders;

use App\ProfileAccess;
use Illuminate\Database\Seeder;

class ProfileAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileAccess::create([
            'company_id' => 1,
            'user_id' => 12,
        ]);

        ProfileAccess::create([
            'company_id' => 1,
            'user_id' => 17,
        ]);

        ProfileAccess::create([
            'company_id' => 1,
            'user_id' => 4,
        ]);
    }
}
