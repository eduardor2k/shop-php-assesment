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
                'name' => 'Faux leather jacket with hood',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae mauris ac nisi hendrerit aliquet. Morbi vitae turpis vitae',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ];

        DB::table('products')->insert($products);
    }
}
