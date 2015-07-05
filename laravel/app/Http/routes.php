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

Route::get('/', ['as' => 'home',function () {
    $items = Inventory::all()->take(4);
    return view('welcome',['items' => $items]);
}]);

Route::group(['prefix' => 'cart'],function() {

    Route::get('/', ['uses' => 'CartController@index', 'as' => 'cart.index']);
    Route::get('add/{product_id}', ['uses' => 'CartController@add', 'as' => 'cart.add']);
    Route::get('update/{product_id}/{quantity}', ['uses' => 'CartController@update', 'as' => 'cart.update']);
    Route::get('remove/{product_id}', ['uses' => 'CartController@remove', 'as' => 'cart.remove']);
    Route::get('clear', ['uses' => 'CartController@clear', 'as' => 'cart.clear']);
});

Route::group(['prefix' => 'checkout'],function() {
    Route::match(['get', 'post'],'/', ['uses' => 'CheckoutController@index', 'as' => 'checkout.index']);
    // Route::match(['get', 'post'],'shipping', ['uses' => 'CheckoutController@shipping', 'as' => 'checkout.shipping']);
    // Route::match(['get', 'post'],'payment', ['uses' => 'CheckoutController@payment', 'as' => 'checkout.payment']);
    Route::match(['get', 'post'],'order', ['uses' => 'CheckoutController@order', 'as' => 'checkout.order']);
});

Route::group(['prefix' => 'coupon'],function() {

    Route::get('/', ['uses' => 'CouponController@index', 'as' => 'coupon.index']);
    Route::get('add/{product_id}', ['uses' => 'CouponController@add', 'as' => 'coupon.add']);
    Route::get('remove/{product_id}', ['uses' => 'CouponController@remove', 'as' => 'coupon.remove']);
    Route::get('clear', ['uses' => 'CouponController@clear', 'as' => 'coupon.clear']);

});

Route::group(['prefix' => 'backoffice'],function(){

    Route::get('/', ['as' => 'backoffice', function ()    {
        return view('backoffice.index');
    }]);

    Route::get('products', ['uses' => 'BackOffice\ProductController@index', 'as' => 'backoffice.products']);
    Route::get('categories', ['uses' => 'BackOffice\CategoryController@index', 'as' => 'backoffice.categories']);
    Route::get('inventory', ['uses' => 'BackOffice\InventoryController@index', 'as' => 'backoffice.inventory']);
    Route::get('coupons', ['uses' => 'BackOffice\CouponController@index', 'as' => 'backoffice.coupons']);
    Route::get('orders', ['uses' => 'BackOffice\OrderController@index', 'as' => 'backoffice.order']);

});

Route::get('/{category}/{product}_p{product_id}.html', ['uses' => 'ProductController@index', 'as' => 'product']);
Route::get('/{category}',['uses' => 'CategoryController@index', 'as' => 'category']);

