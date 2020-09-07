<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function __construct()
    {
        $this->middleware('set_shopping_cart');
    }

    public function show(Request $request) {
        $shopping_cart = $request->shopping_cart;
        return view('shop.shopping_cart.show',compact('shopping_cart'));
    }

}
