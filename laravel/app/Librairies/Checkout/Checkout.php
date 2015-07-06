<?php
namespace App\Librairies\Checkout;

use Gloudemans\Shoppingcart\Facades\Cart;

class Checkout
{
    /**
     * Session class instance
     *
     * @var Illuminate\Session\SessionManager
     */
    protected $session;

    /**
     * Data
     *
     * @var array
     */
    protected $data;

    /**
     * Constructor
     *
     * @param Illuminate\Session\SessionManager $session Session class instance
     */
    public function __construct(\Illuminate\Session\SessionManager $session)
    {
        $this->session = $session;
        $this->data = $this->getData();
        $this->instance = 'main';
    }

    /**
     * Set the current cart instance
     *
     * @param string  $instance CheckOut
     * @return $this
     * @throws Exception\CheckoutInstanceException
     */
    public function instance($instance = null)
    {
        if(empty($instance)) throw new Exception\CheckoutInstanceException;

        $this->instance = $instance;

        // Return self so the method is chainable
        return $this;
    }

    /**
     * This method is going to copy a cart into checkout
     *
     * @param Gloudemans\Shoppingcart\Facades\Cart $cartData
     */
    public function importCart($cartData)
    {
        $cart = Cart::instance('checkout_cart');
        $cart->destroy();

        foreach($cartData as $item)
        {
            $cart->add($item->id,$item->name,$item->qty,$item->price);
        }
    }

    /**
     * This method saves the data
     *
     * @param array $data
     */
    public function saveData($data)
    {
        $this->data = array_merge($this->data,$data);
        $this->session->put('checkout',$this->data);
    }

    /**
     * Returns the data
     *
     * @return mixed
     */
    public function getData()
    {
        $data = $this->session->get('checkout');
        if(!$data)
        {
            return [];
        }
        return $data;
    }

    /**
     * Returns the cart
     *
     * @return mixed
     */
    public function getCart()
    {
        $cart = Cart::instance('checkout');
        return $cart->content();
    }
}