<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Librairies\Checkout\Facades\Checkout;
use Illuminate\Http\Request;
use Validator;
use App\Models\Order;

/**
 * Class CheckoutController
 *
 * This controller manages the checkout process
 *
 * @package App\Http\Controllers
 */
class CheckoutController extends Controller
{
    /**
     * Remove all items from the cart
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $post = $request->all();
        $errors = [];

        if($request->method() == 'POST')
        {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'street_name' => 'required',
                'city' => 'required',
                'country' => 'required',
                'zipcode' => 'required',
            ]);

            // If everything is ok
            if (count($validator->errors()->all()) == 0) {

                Order::addOrder($post,Cart::total(),Cart::content());
                Cart::destroy();
                return redirect()->route('checkout.order');
            }

            $errors = $validator->errors()->all();
        }

        return view('checkout.index', [
            'products' => Cart::content(),
            'total' => Cart::total(),
            'post' => $post,
            'errors' => $errors,
        ]);
    }

    /**
     * Order method
     *
     * @return \Illuminate\View\View
     */
    public function order()
    {
        return view('checkout.order');
    }
}