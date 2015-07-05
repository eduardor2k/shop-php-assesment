<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        $orders = [
            [
                'id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@bermudatriangle.com',
                'telephone' => '+51123456789',
                'street_name' => 'Unknown adress 7, 5B',
                'city' => 'Miami',
                'country' => 'United States of America',
                'zipcode' => '56300',
                'amount' => 50.00,
                'status' => 0,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ];

        DB::table('orders')->insert($orders);
    }
}
