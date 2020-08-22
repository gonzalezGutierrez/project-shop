<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{

    public function __construct() {
        $this->products = new Product();
        $this->lastProducts = 8;
    }

    public function home() {
        $productsLastes = $this->products->getLastProducts($this->lastProducts)->get();
        return view('shop.welcome',compact('productsLastes'));
    }

}
