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


Route::get('login','AuthController@loginForm');
Route::post('login','AuthController@login');


Route::group(['namespace'=>'Admin','prefix'=>'administracion','middleware'=>['auth','isUserAdmin']],function(){

    Route::resource('categorias','CategoryController');
    Route::delete('eliminar-imagen','CategoryController@deleteImage');
    Route::resource('marcas','BrandController');
    Route::resource('proveedores','ProviderController');

    Route::resource('productos','ProductController');
    Route::get('productos-resultados','ProductController@resultProducts');
    Route::get('productos-proximos-terminar','ProductController@productOutStock');

    Route::resource('historial-precios','PriceHistoryController');

    Route::resource('compras','BuyController');
});


Route::group(['namespace'=>'Shop'],function(){

    Route::resource('users','UserController');
    Route::get('user-registered-successfuly/{token}/{email}','UserController@registeredOk');
    Route::get('activate-account/{token}/{email}','UserController@activateUser');

    Route::get('/','HomeController@home');
    Route::resource('products','ProductsController');
    Route::resource('categories','CategoriesController');
});
