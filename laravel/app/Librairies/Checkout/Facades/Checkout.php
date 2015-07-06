<?php
namespace App\Librairies\Checkout\Facades;

use Illuminate\Support\Facades\Facade;

class Checkout extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'App\Checkout\Checkout'; }
}