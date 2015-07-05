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

    Route::get('/', ['as' => 'backoffice', function ()    {
        return view('backoffice.index');
    }]);

    Route::get('products', ['uses' => 'BackOffice\ProductController@index', 'as' => 'backoffice.products']);
    Route::get('categories', ['uses' => 'BackOffice\CategoryController@index', 'as' => 'backoffice.categories']);
    Route::get('inventory', ['uses' => 'BackOffice\InventoryController@index', 'as' => 'backoffice.inventory']);

});

Route::get('/{category}/{product}_p{product_id}.html', ['uses' => 'ProductController@index', 'as' => 'product']);
Route::get('/{category}',['uses' => 'CategoryController@index', 'as' => 'category']);
