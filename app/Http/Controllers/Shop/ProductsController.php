<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function show($slug) {
        $product = Product::findWithSlug($slug);
        $available = $product->existencia > 0 ? 'Disponible' : 'No-disponible';
        $products  = Product::getProductsSimilar($product->id,$product->marca_id,12)->get();
        return view('shop.products.show',compact('product','available','products'));
    }


}
