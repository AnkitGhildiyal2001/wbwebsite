<?php
namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'maxmuster',
            'firstname' => 'Max',
            'lastname' => 'Mustermann',
            'name' => 'Max Mustermann',
            'isCompanyContact' => 1,
            'email' => 'm.mustermann@gmx.de',
            'password' => bcrypt('test123456'),
            'image' => null,
            'email_verified_at' => '2019-12-02 20:01:00',
            'slug' => Str::slug('maxmuster', '-'),
        ]);

        User::create([
            'username' => 'lufthanse',
            'firstname' => 'Dodo',
            'lastname' => 'Floglotze',
            'name' => 'Dodo Floglotze',
            'isCompanyContact' => 1,
            'email' => 'd.lotze@lufthanse.de',
            'email_verified_at' => '2021-01-27 00:00:00',
            'password' => bcrypt('test123456'),
            'image' => null,
            'slug' => Str::slug('lufthanse', '-'),
        ]);

        User::create([
            'username' => 'AlexiBexi',
            'firstname' => 'Alexandra',
            'lastname' => 'Waurig',
            'name' => 'Alexandra Waurig',
            'isCompanyContact' => null,
            'email' => 'a.waurig@gmx.de',
            'password' => bcrypt('test123456'),
            'role_id' => 3,
            'email_verified_at' => '2019-12-02 20:01:00',
            'image' => 'alexibexi/3CZMCy536HjOKdOEOC7t7VazNSuZf3GyLkvkru2t.png',
            'slug' => Str::slug('AlexiBexi', '-'),
        ]);

        User::create([
            'username' => 'RubiPuh',
            'firstname' => 'Ruben',
            'lastname' => 'Richthammer',
            'name' => 'Ruben Richthammer',
            'isCompanyContact' => null,
            'email' => 'hey@ruub.in',
            'password' => bcrypt('test123456'),
            'role_id' => 3,
            'image' => 'alexibexi/3CZMCy536HjOKdOEOC7t7VazNSuZf3GyLkvkru2t.png',
            'slug' => Str::slug('RubiPuh', '-'),
        ]);

        for ($i = 0; $i <= 50; $i++) {
            $faker = Faker::create();
            $username = $faker->userName;
            $firstname = $faker->firstName;
            $lastname = $faker->lastName;
            $name = $firstname . ' ' . $lastname;
            User::create([
                'username' => $username,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'name' => $name,
                'isCompanyContact' => null,
                'email' => $faker->email,
                'password' => bcrypt('test123456'),
                'role_id' => rand(1, 2),
                'image' => 'alexibexi/3CZMCy536HjOKdOEOC7t7VazNSuZf3GyLkvkru2t.png',
                'slug' => Str::slug($username, '-'),
            ]);
        }
    }
}
