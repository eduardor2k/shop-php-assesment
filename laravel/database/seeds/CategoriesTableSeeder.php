<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            [
                'id' => 1,
                'name' => 'New Arrivals',
                'position' => 1,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 2,
                'name' => 'Tuxedo',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 3,
                'name' => 'Sweater',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 4,
                'name' => 'Shoes',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 5,
                'name' => 'Glasses',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 6,
                'name' => 'T-Shirt',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id' => 7,
                'name' => 'Watches',
                'position' => 2,
                'parent' => 0,
                'menu' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
