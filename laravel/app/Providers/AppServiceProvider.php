<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Artisan uses routing, so it tries to retrieve all the categories when doing migrating
        // getting an error
        if (!Schema::hasTable('categories'))
        {
            return;
        }
        view()->share('categories', Category::all()->take(8));
        //view()->share('cart_total', Cart::total());
        //view()->share('cart_items', count(Cart::content()));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
