<?php

namespace App\Providers;

use App\Models\ShoppingCart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Session;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function boot()
    {
        View::composer('*',function($view){

            $shopping_cart_id = \Session::get('shopping_cart_id');
            $shopping_cart   = ShoppingCart::find($shopping_cart_id);

            $view->with('productsCount',$shopping_cart->productsCount());
        });

    }
}
