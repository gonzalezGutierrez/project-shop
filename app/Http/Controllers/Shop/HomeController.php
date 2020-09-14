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
       $categories = Category::getWithStatus('activo')->take(9)->get();
       $products   = Product::getLastProducts(8)->get();
       $productsCountRegister = Product::where('estatus','activo')->count();
       return view('shop.welcome',compact('categories','products','productsCountRegister'));
    }

    public function pymes() {
        return view('shop.pymes');
    }

    public function shop() {
        $categories = Category::getWithStatus('activo')->get();
        $brands     = $this->brand->getBrands('activo');
        $products   = $this->products->getProductsPaginate(10);
        return view('shop.shop',compact('categories','brands','products'));
    }

}
