<?php

use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->delete();

        $products = [
            [
                'code' => 'TEST20',
                'discount' => 20,
                'enable' => 0,
                'expire' => 0,
                'status' => true,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'code' => 'TEST10',
                'discount' => 10,
                'enable' => 0,
                'expire' => 0,
                'status' => true,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('coupons')->insert($products);
    }
}
