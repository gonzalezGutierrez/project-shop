<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Entry;

class HomeController extends Controller
{

    public function __construct() {
        $this->products = new Product();
        $this->brand    = new Brand();
        $this->lastProducts = 8;
        $this->entry = new Entry();
    }

    public function home() {
        $categories = Category::getWithStatus('activo')->take(9)->get();
        $products   = Product::getLastProducts(8)->get();
        $productsCountRegister = Product::where('estatus','activo')->count();
        $entries = $this->entry->getActives()->take(4)->get();
        $latestEntry = $this->entry->getActives()->first();
       return view('shop.welcome',compact('categories','products','productsCountRegister','entries','latestEntry'));
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

    public function about() {
        return view('shop.about');
    }

}
