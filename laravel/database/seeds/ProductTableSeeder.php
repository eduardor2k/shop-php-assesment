<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $products = [
            [
                'id' => 1,
                'name' => 'Grey Suit',
                'price' => rand(30,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 2,
                'name' => 'Faux leather jacket with hood',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 3,
                'name' => 'Light Trench Coat',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 4,
                'name' => 'Combined denim zip jacket',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 5,
                'name' => 'Long denim parka',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 6,
                'name' => 'White line faux leather jacket',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 7,
                'name' => 'Blue overshirt',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 8,
                'name' => 'Mixed fabric jacket',
                'price' => rand(0,100),
                'short_description' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('products')->insert($products);
    }
}
