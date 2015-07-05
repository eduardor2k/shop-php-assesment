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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}