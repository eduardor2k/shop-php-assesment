<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Models
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('backoffice.product.index',['products' => $products]);
    }
}
