<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

    public function __construct() {
        $this->products = new Product();
        $this->brand    = new Brand();
        $this->lastProducts = 8;
    }

    public function home() {
       $categories = Category::getWithStatus('activo')->get();
       $products   = Product::getLastProducts(8)->get();
       return view('shop.welcome',compact('categories','products'));
    }

    public function pymes() {
        return view('shop.pymes');
    }

    public function shop() {
        $categories = Category::getWithStatus('activo')->get();
        $brands     = $this->brand->getBrands('activo');
        $products   = $this->products->getProducts('activo');
        return view('shop.shop',compact('categories','brands','products'));
    }

}
