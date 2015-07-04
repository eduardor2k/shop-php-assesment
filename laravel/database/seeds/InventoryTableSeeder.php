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
            ]
        ];

        DB::table('inventory')->insert($products);
    }
}
