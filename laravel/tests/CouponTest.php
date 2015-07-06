<?php

use Gloudemans\Shoppingcart\Facades\Cart;

class CouponTest extends TestCase
{
    /**
     * Add item to cart
     *
     * @return void
     */
    public function testAddItem()
    {
        $this->call('GET','/coupon/add/TEST20');
        $this->assertRedirectedToRoute('cart.index');

        $coupon = Cart::coupons()->toArray();

        $this->assertEquals('test20',$coupon['test20']['name']);
        $this->assertEquals(20,$coupon['test20']['discount']);
    }

    /**
     * Add item to cart
     *
     * @return void
     */
    public function testRemoveItem()
    {
        $this->call('GET','/coupon/add/TEST20');

        $this->assertEquals(1,count(Cart::coupons()));

        $this->call('GET','/coupon/remove/TEST20');
        //$this->assertRedirectedToRoute('cart.index');

        $this->assertEquals(0,count(Cart::coupons()));

        $this->call('GET','/coupon/remove/TEST20');
        $this->assertRedirectedToRoute('cart.index');
    }
}