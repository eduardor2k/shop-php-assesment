<?php
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

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
     */
    public function add($couponName)
    {

    }

    public function remove($couponName)
    {

    }

    /**
     *
     */
    public function clear()
    {

    }
}