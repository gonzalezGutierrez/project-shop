<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'Api\V1','prefix'=>'v1'],function() {

    Route::resource('categories','CategoryController')->only(['index','show']);

    Route::resource('products','ProductController')->only(['index','show']);
    Route::get('products-latest','ProductController@lastProducts');
    Route::get('products-similar/{slug}','ProductController@productsSimilars');

    Route::get('products-by-category/{category_slug}','ProductController@productsByCategory');

    Route::post('shopping_cart','ShoppingCartController@store');
    Route::post('shopping_cart/add','ShoppingCartController@addToShoppingCart');
    Route::get('shopping_cart/products','ShoppingCartController@products');

    Route::resource('users','UserController');
    Route::post('users/activate-account','UserController@activateAccount');
    Route::get('profile','UserController@show');

    Route::post('auth/login','AuthController@login');

});
