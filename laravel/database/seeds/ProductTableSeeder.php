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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 2,
                'name' => 'Faux leather jacket with hood',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 3,
                'name' => 'Light Trench Coat',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 4,
                'name' => 'Combined denim zip jacket',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 5,
                'name' => 'Long denim parka',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 6,
                'name' => 'White line faux leather jacket',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 7,
                'name' => 'Blue overshirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 8,
                'name' => 'Mixed fabric jacket',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('products')->insert($products);
    }
}
