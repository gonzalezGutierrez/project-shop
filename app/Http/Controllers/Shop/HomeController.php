<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

    public function __construct() {
        $this->products = new Product();
        $this->lastProducts = 8;
    }

    public function home() {
       $categories = Category::getWithStatus('activo')->get();
       $products   = Product::getLastProducts(8)->get();
       return view('shop.welcome',compact('categories','products'));
    }

}
