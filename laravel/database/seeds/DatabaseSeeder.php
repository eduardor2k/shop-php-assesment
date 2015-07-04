<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ProductTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(InventoryTableSeeder::class);

        Model::reguard();
    }
}

include 'ProductTableSeeder.php';
include 'CategoriesTableSeeder.php';
include 'CategoryProductTableSeeder.php';
include 'InventoryTableSeeder.php';