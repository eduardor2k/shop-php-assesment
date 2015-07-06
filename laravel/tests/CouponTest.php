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
        Cart::addCoupon('TEST20',5.5);

        $coupon = Cart::coupons()->toArray();

        $this->assertEquals('TEST20',$coupon['TEST20']['name']);
        $this->assertEquals(5.5,$coupon['TEST20']['discount']);
    }

    /**
     * Remove coupon in the cart
     *
     * @expectedException App\Librairies\Shoppingcart\Exceptions\CouponNotFoundException
     */
    public function testRemoveItem()
    {
        Cart::addCoupon('TEST20',5.5);

        $this->assertEquals(1,count(Cart::coupons()->all()));

        Cart::removeCoupon('TEST20');

        $this->assertEquals(0,count(Cart::coupons()->all()));

        Cart::removeCoupon('UNKNOWN_COUPON');
    }
}
