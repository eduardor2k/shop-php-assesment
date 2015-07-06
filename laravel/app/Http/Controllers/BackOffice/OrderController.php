<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Models
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('backoffice.order.index',['items' => Order::all()]);
    }
}
