<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('login','AuthController@loginForm')->name('login')->middleware('guest');
Route::post('login','AuthController@login');
Route::post('logout','AuthController@logout');


Route::group(['namespace'=>'Admin','prefix'=>'administracion','middleware'=>['auth','isUserAdmin']],function(){

    Route::resource('categorias','CategoryController');
    Route::delete('eliminar-imagen','CategoryController@deleteImage');
    Route::resource('marcas','BrandController');
    Route::resource('proveedores','ProviderController');

    Route::resource('productos','ProductController');
    Route::get('productos-resultados','ProductController@resultProducts');
    Route::get('productos-proximos-terminar','ProductController@productOutStock');
    Route::put('productos-estatus/{product_id}','ProductController@changeStatus');

    Route::resource('historial-precios','PriceHistoryController');

    Route::resource('compras','BuyController');

});


Route::group(['namespace'=>'Shop','middleware'=>'set_shopping_cart'],function(){

    Route::resource('users','UserController');
    Route::get('user-registered-successfuly/{token}/{email}','UserController@registeredOk');
    Route::get('activate-account/{token}/{email}','UserController@activateUser');
    Route::get('account','UserController@show')->middleware('auth');

    Route::get('/','HomeController@home');
    Route::get('member-pymes','HomeController@pymes');
    Route::get('/shop-general','HomeController@shop');

    Route::resource('products','ProductsController');
    Route::get('products-category/{category_slug}','ProductsController@productsByCategory');
    Route::resource('categories','CategoriesController');


    Route::resource('product_in_shopping_cart','ProductInShoppingCartController')
        ->only('store','destroy');

    Route::get('basket','ShoppingCartController@show');

    Route::get('checkout','PayController@checkout');

    Route::post('payments/pay','PayController@store');
    Route::get ('payments/pay/approval','PayController@approval');
    Route::get ('payments/pay/cancelled','PayController@cancelled');
});
