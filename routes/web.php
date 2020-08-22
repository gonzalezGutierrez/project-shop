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




Route::get('acceso','AuthController@access');

Route::post('login','AuthController@login');

Route::group(['namespace'=>'Admin','prefix'=>'administracion'],function(){

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

    Route::get('/','HomeController@home');

    Route::post('auth/register','UserController@store');
    Route::get('register-completed','UserController@registerCompleted');
    Route::get('activate-account','UserController@activateAccount');

    Route::get('profile','UserController@show');


});
