<?php

use Gloudemans\Shoppingcart\Facades\Cart;

class CartTest extends TestCase
{
    /**
     * Add item to cart
     *
     * @return void
     */
    public function testAddItem()
    {
        $this->call('GET','/cart/add/1');
        $this->assertRedirectedToRoute('cart.index');

        $this->assertEquals(1,count(Cart::content()));

        $this->call('GET','/cart/add/2');
        $this->assertRedirectedToRoute('cart.index');

        $this->assertEquals(2,count(Cart::content()));
    }

    /**
     * Remove item to cart
     *
     * @return void
     */
    public function testRemoveItem()
    {
        $this->call('GET','/cart/add/1');
        $this->assertRedirectedToRoute('cart.index');

        $this->call('GET','/cart/add/2');
        $this->assertRedirectedToRoute('cart.index');

        $cart = Cart::content();
        $this->assertEquals(2,count($cart));

        $item = current(current($cart));
        $this->call('GET','/cart/remove/'.$item->rowid);
        $this->assertRedirectedToRoute('cart.index');

        $this->assertEquals(1,count(Cart::content()));
    }

    /**
     * Remove all items from the cart
     */
    public function testClear()
    {
        $this->call('GET','/cart/add/1');
        $this->call('GET','/cart/add/2');

        $this->assertEquals(2,count(Cart::content()));

        $this->call('GET','/cart/clear');
        $this->assertRedirectedToRoute('cart.index');

        $this->assertEquals(0,count(Cart::content()));
    }
}
