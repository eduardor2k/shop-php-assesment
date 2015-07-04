<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Artisan uses routing, so it tries to retrieve all the catgeories when doing migrating
        // getting an error
        if (!Schema::hasTable('categories'))
        {
            return;
        }
        view()->share('categories', Category::all()->take(8));
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
