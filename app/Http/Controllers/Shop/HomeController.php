<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function shop(Request $request) {

        $categories = Category::where('estatus','activo')->pluck('nombre','id');
        $brands     = Brand::where('estatus','activo')->pluck('nombre','id');
        $products = $this->products->getProductsShopLike($request)->paginate(16);

        return view('shop.shop',compact('categories','brands','products'));
    }

    public function about() {
        return view('shop.about');
    }

    public function contact() {
        return view('shop.contact');
    }

}
