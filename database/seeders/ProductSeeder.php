<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductSeeder extends Seeder

{
    public function run()
    {
        $product = [

            [
                'id'             => 1,
                'name'          => 'Car',
                'image_product' => 'https://img.etimg.com/thumb/msid-73268134,width-640,resizemode-4,imgsize-35417/surprise-heard-of-a-sony-car.jpg',
                'variations'          => '[{"image": "https://www.largus.fr/images/images/1280x853-vw-id-5-largus-av.jpg?width=612&quality=80","quantity": "45","variation": "gfd"}]',
                'company_id'      => 1,
                'created_at'      => '2021-01-21 19:34:47',
                'updated_at'      => '2021-01-21 19:34:47'
            ],
            [
                'id'             => 2,
                'name'          => 'Voiture',
                'image_product' => 'https://img.etimg.com/thumb/msid-73268134,width-640,resizemode-4,imgsize-35417/surprise-heard-of-a-sony-car.jpg',
                'variations'          => '[{"image": "https://www.largus.fr/images/images/1280x853-vw-id-5-largus-av.jpg?width=612&quality=80","quantity": "45","variation": "gfd"}]',
                'company_id'      => 1,
                'created_at'      => '2021-01-21 19:34:47',
                'updated_at'      => '2021-01-21 19:34:47'
            ]
        ];

        Product::insert($product);

    }
}
