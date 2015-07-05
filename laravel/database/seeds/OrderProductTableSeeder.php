<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->delete();

        $orders = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ];

        DB::table('order_product')->insert($orders);
    }
}
