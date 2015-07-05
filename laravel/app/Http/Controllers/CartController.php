<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * Class CategoryController
 *
 * This controllers displays all the products for a given category
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
        return view('checkout', [
            'products' => Cart::content(),
            'total' => Cart::total(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
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
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function remove($product_id)
    {
        Cart::remove($product_id);
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function clear()
    {
        Cart::destroy();
        return redirect()->route('cart.index');
    }
}
