<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory')->delete();

        $products = [
            [
                'product_id' => 1,
                'price' => 50,
                'tax' => 21,
                'quantity' => 12,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 2,
                'price' => 89,
                'tax' => 21,
                'quantity' => 40,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 3,
                'price' => 99,
                'tax' => 21,
                'quantity' => 35,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 4,
                'price' => 79,
                'tax' => 21,
                'quantity' => 12,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 5,
                'price' => 45,
                'tax' => 21,
                'quantity' => 15,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 6,
                'price' => 69,
                'tax' => 21,
                'quantity' => 250,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 7,
                'price' => 39.99,
                'tax' => 21,
                'quantity' => 100,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'product_id' => 8,
                'price' => 100,
                'tax' => 21,
                'quantity' => 30,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('inventory')->insert($products);
    }
}
