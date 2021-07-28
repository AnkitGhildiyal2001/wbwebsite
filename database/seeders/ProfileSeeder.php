<?php
namespace Database\Seeders;

use App\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 55; $i++) {
            Profile::create([
                'about' => null,
                'user_id' => $i,
            ]);
        }
    }
}
