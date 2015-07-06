<?php namespace App\Librairies\Shoppingcart\Facades;

use Gloudemans\Shoppingcart\Facades\Cart as FacadeCart;

class Cart extends FacadeCart {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'cart'; }

}