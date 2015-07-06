<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Models
use App\Models\Category;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers\BackOffice
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backoffice.category.index',['categories' => $categories]);
    }
}
