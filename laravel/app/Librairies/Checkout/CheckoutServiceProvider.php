<?php namespace App\Librairies\Checkout;

use Illuminate\Support\ServiceProvider;

class CheckoutServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['Checkout'] = $this->app->share(function($app)
        {
            $session = $app['session'];
            return new Checkout($session);
        });
    }
}