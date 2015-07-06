<?php

use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * This class extends the cart class
 *
 * Class CouponTest
 */
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

    /**
     * Removes all the coupons from the cart
     */
    public function testClearItems()
    {
        Cart::addCoupon('TEST20',5.5);
        Cart::addCoupon('TEST10',5.5);
        Cart::addCoupon('TEST40',5.5);
        Cart::addCoupon('TEST50',7.5);

        $this->assertEquals(4,count(Cart::coupons()->all()));

        Cart::clearCoupons();

        $this->assertEquals(0,count(Cart::coupons()->all()));
    }
}
