<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Models\Category;
use App\Models\Product;

/**
 * Class CategoryController
 *
 * This controllers displays all the products for a given category
 *
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($category)
    {
        // We retrieve the category
        $item = Category::getByCode($category);

        // If the category does not exist we throw a 404 message
        if(!$item)
        {
            abort(404);
        }

        // We send everything to the view
        return view('category',[
            'category' => $item,
            'products' => $item->products
        ]);
    }
}
