<?php namespace App\Http\Controllers;

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
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($category,$product,$product_id)
    {
        // We retrieve the category
        $category = Category::getByCode($category);

        // If the category does not exist we throw a 404 message
        if(!$category)
        {
            abort(404);
        }

        // We retrieve the category
        $product = Product::find($product_id);

        // If the category does not exist we throw a 404 message
        if(!$product)
        {
            abort(404);
        }

        // We send everything to the view
        return view('product',[
            'category' => $category,
            'product' => $product
        ]);
    }
}
