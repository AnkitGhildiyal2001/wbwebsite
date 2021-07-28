<?php
namespace Database\Seeders;

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Mustermann GmbH',
            'slug' => Str::slug('Mustermann GmbH', '-'),
            'user_id' => 1,
        ]);

        Company::create([
            'name' => 'Lufthansa',
            'slug' => Str::slug('Lufthansa', '-'),
            'user_id' => 2,
        ]);
    }
}
