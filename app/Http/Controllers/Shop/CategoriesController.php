<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        //
    }
    public function show($slug)
    {
        $category = Category::findWithSlug($slug);
        $products = Product::getProductsWithCategoryId($category->id)->get();
        return view('shop.categories.show',compact('category','products'));
    }
}
