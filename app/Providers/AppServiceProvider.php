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
        view()->composer('*', function ($view)
        {
            
        });
    }
}
