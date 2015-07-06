<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests;
use App\Librairies\Shoppingcart\Exceptions;

// Shopping cart
use Gloudemans\Shoppingcart\Facades\Cart;

// Models in use
use App\Models\Coupon;

/**
 * Class CouponController
 *
 * This controler manages all the coupon operations
 *
 * @package App\Http\Controllers
 */
class CouponController extends Controller
{
    /**
     * This method add a coupon
     *
     * @param string $couponName
     * @return Response
     */
    public function add($couponName)
    {
        $couponName = strtolower($couponName);
        $coupon = Coupon::findByCode($couponName);
        if(!$coupon)
        {
            return redirect()->route('cart.index');
        }
        Cart::addCoupon($couponName,$coupon->discount);
        return redirect()->route('cart.index');
    }

    /**
     * Removes a coupon from the list
     *
     * @param string $couponName
     * @return Response
     */
    public function remove($couponName)
    {
        try
        {
            Cart::removeCoupon(strtolower($couponName));
        }
        catch(Exceptions\CouponNotFoundException $e)
        {
            // Do nothing
        }
        return redirect()->route('cart.index');
    }

    /**
     *
     */
    public function clear()
    {

    }
}