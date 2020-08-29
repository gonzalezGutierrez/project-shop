<?php

namespace App\Http\Middleware;

use App\Models\ShoppingCart;
use Closure;

class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $shopping_cart_id = $request->shopping_cart_id;
        $request->shopping_cart = ShoppingCart::findOrCreateById($shopping_cart_id);
        return $next($request);
    }
}