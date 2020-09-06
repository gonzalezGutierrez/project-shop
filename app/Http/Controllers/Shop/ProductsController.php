<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->products = new Product();
        $this->category = new Category();
    }

    public function index(Request $request) {

    }

    public function productsByCategory($categorySlug) {
        $category = Category::findWithSlug($categorySlug);
        $categories = $this->category->getCategoriesLess($category->id)->get();
        $products = $this->products->getProductsWithCategoryId($category->id)->paginate(9);
        return view('shop.products.product-category',compact('products','category','categories'));
    }

    public function show($slug) {
        $product = Product::findWithSlug($slug);
        $products  = Product::getProductsSimilar($product->id,$product->marca_id,12)->take(8)->get();
        return view('shop.products.show',compact('product','products'));
    }


}
