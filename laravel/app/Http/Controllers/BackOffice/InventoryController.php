<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Models
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Inventory::all();
        return view('backoffice.inventory.index',['items' => $items]);
    }
}
