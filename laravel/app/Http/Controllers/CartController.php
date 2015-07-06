<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * Class CartController
 *
 * This controler manages all the cart operations
 *
 * @package App\Http\Controllers
 */
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('cart', [
            'products' => Cart::content(),
            'discount' => Cart::discount(),
            'coupons' => Cart::coupons()->toArray(),
            'total' => Cart::total(),
            'total_with_discount' => Cart::totalWithDiscount(),
        ]);
    }

    /**
     * Adds an item to the cart
     *
     * @return Response
     */
    public function add($product_id)
    {
        $product =  Product::find($product_id);
        if(!$product)
        {
            abort(404);
        }
        Cart::associate('Product','App\Models')->add($product_id, $product->name, 1, $product->price);
        return redirect()->route('cart.index');
    }

    /**
     * Removes an item from the cart
     *
     * @param   string      $rowid      Item identifier in the cart
     * @return Response
     */
    public function remove($rowid)
    {
        Cart::remove($rowid);
        return redirect()->route('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   string      $rowid      Item identifier in the cart
     * @param   integer     $quantity   New quantity of the item|Array of attributes to update
     * @return  Response
     */
    public function update($rowid,$quantity)
    {
        $quantity = intval($quantity);
        try
        {
            Cart::update($rowid,$quantity);
        }
        catch(\Exception $e)
        {
            // If the items does not exist, we do nothing
        }
        return redirect()->route('cart.index');
    }

    /**
     * Remove all items from the cart
     *
     * @return Response
     */
    public function clear()
    {
        Cart::destroy();
        return redirect()->route('cart.index');
    }
}
