<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Session;
use Response;
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


    }
}
