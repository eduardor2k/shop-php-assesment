<?php
namespace App\Librairies\Shoppingcart;

use Gloudemans\Shoppingcart\Cart as OldCart;

/**
 * This class extend the old Cart Class, the old one does not support the use of coupons, so
 * we are going to extends that functionnality.
 *
 * @package App\Librairies\Shoppingcart
 */
class Cart extends OldCart
{
    /**
     * Adds a coupon
     *
     * @param string $name
     * @param float $discount
     * @return CouponCollection
     */
    public function addCoupon($name,$discount)
    {
        $newCoupon = new CouponCollection([
            'name' => $name,
            'discount' => $discount,
        ]);

        // We retrieve all the coupons
        $coupons = $this->coupons();

        // We add the new item to our collection
        $coupons->put($name, $newCoupon);

        // We save everything in the session
        $this->session->put($this->getCouponInstance(),$coupons);

        return $coupons;
    }

    /**
     * Removes a coupon
     *
     * @param string $name
     * @return CouponCollection
     * @throws Exceptions\CouponNotFoundException
     */
    public function removeCoupon($name)
    {
        $coupons = $this->coupons();
        // We retrieve all the coupons
        if(!$coupons->has($name))
        {
            throw new Exceptions\CouponNotFoundException();
        }

        // We remove the coupon from the collection
        $coupons->forget($name);

        // We save everything in the session
        $this->session->put($this->getCouponInstance(),$coupons);

        return $coupons;
    }

    /**
     * Removes all the coupons
     *
     * @return CouponCollection
     */
    public function clearCoupons()
    {
        $this->session->put($this->getCouponInstance(),new CouponCollection());
        return $this->coupons();
    }

    /**
     * Returns all the coupons
     *
     * @return CouponCollection
     */
    public function coupons()
    {
        return ($this->session->has($this->getCouponInstance())) ? $this->session->get($this->getCouponInstance()) : new CouponCollection;
    }

    /**
     * Returns the instance for the coupons
     *
     * @return string
     */
    protected function getCouponInstance()
    {
        return 'coupons.' . $this->instance;
    }
}