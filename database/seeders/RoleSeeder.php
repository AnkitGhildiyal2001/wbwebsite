<?php
namespace Database\Seeders;

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'title' => 'YoungBrudi',
        ]);

        Role::create([
            'title' => 'HeroBrudi',
        ]);

        Role::create([
            'title' => 'WBTeam',
        ]);
    }
}
