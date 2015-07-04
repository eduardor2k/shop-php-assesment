<?php
use App\Models\Inventory;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $items = Inventory::all()->take(4);
    return view('welcome',['items' => $items]);
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::group(['prefix' => 'backoffice'],function(){

    Route::get('/', function ()    {
        return view('backoffice.index');
    });

    Route::resource('products', 'BackOffice\ProductController');
    Route::resource('categories', 'BackOffice\CategoryController');
    Route::resource('inventory', 'BackOffice\InventoryController');

});

Route::resource('/{category}', 'CategoryController@index');
Route::resource('/{category}/{product}', 'CategoryController@index');
