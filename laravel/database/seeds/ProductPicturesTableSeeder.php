<?php

use Illuminate\Database\Seeder;

class ProductPicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_pictures')->delete();

        $products = [
            [
                'product_id' => 1,
                'path' => '1.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 2,
                'path' => '2.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 3,
                'path' => '3.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 4,
                'path' => '4.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 5,
                'path' => '5.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 6,
                'path' => '8.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 7,
                'path' => '11.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 8,
                'path' => '11.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('products_pictures')->insert($products);
    }
}
