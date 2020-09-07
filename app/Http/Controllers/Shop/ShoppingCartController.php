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
        $products = $shopping_cart->products()->get();
        $total = $shopping_cart->amount();
        $shippingPrice = 0.0;
        if (!$shopping_cart->isShippingFree()  && $total > 0) {
            $shippingPrice = 100;
            $total = $total + $shippingPrice;
        }
        return view('shop.shopping_cart.show',compact('shopping_cart','products','total','shippingPrice'));
    }

}
