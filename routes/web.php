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

    Route::get('galerias/{product_slug}','ProductImageController@index');
    Route::post('galerias/{product_slug}','ProductImageController@store');
    Route::delete('galerias/{product_id}','ProductImageController@destroy');

    Route::resource('historial-precios','PriceHistoryController');

    Route::resource('compras','BuyController');

    Route::resource('orders','OrderController');
    Route::post('add-invoice','OrderController@addInvoice');

    Route::resource('clientes','CustomerController');

    Route::resource('news','NewsController');

});


Route::group(['namespace'=>'Shop','middleware'=>'set_shopping_cart'],function(){

    Route::resource('users','UserController');
    Route::get('password-update','UserController@updatePasswordForm');
    Route::put('user-update-password/{user_id}','UserController@updatePassword');
    Route::get('user-registered-successfuly/{token}/{email}','UserController@registeredOk');
    Route::get('activate-account/{token}/{email}','UserController@activateUser');

    Route::get('/','HomeController@home');
    Route::get('member-pymes','HomeController@pymes');
    Route::get('/shop-general','HomeController@shop');
    Route::get('about','HomeController@about');
    Route::get('contact','HomeController@contact');

    Route::resource('news','NewsController');

    Route::resource('products','ProductsController');
    Route::get('products-category/{category_slug}','ProductsController@productsByCategory');
    Route::resource('categories','CategoriesController');


    Route::resource('product_in_shopping_cart','ProductInShoppingCartController')
        ->only('store','destroy');

    Route::get('basket','ShoppingCartController@show');

    Route::get('checkout','PayController@checkout')->middleware('auth');

    Route::post('payments/pay','PayController@store')->middleware('auth');
    Route::get ('payments/pay/approval','PayController@approval')->middleware('auth');
    Route::get ('payments/pay/cancelled','PayController@cancelled')->middleware('auth');



    //acount
    Route::get('account','UserController@show')->middleware('auth');
    Route::get('orders','OrderController@index')->middleware('auth');
    Route::get('order-success/{order_code_transaction}','OrderController@orderSuccess')->middleware('auth');
    Route::get('orders/{code_order}','OrderController@show')->middleware('auth');
    Route::resource('address','AddressController')->middleware('auth');
});
