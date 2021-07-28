<?php
namespace Database\Seeders;

use App\CampaignCategory;
use Illuminate\Database\Seeder;

class CampaignCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
          'Beauty & Fashion',
          'Gaming & Apps',
          'Health & Fitness',
          'Schmuck',
          'Food & Nahrungsergänzung',
          'Technik',
          'Autos',
          'Mobilität',
          'Kochen & Backen',
          'Lifestyle',
          'Haustier',
          'Politik',
          'Behörden',
          'Deko & Einrichtung',
          'Basteln',
          'Filme & Musik & Bücher',
        ];

        foreach($categories as $category) {
          CampaignCategory::create(['name' => $category,]);
        }
    }
}
