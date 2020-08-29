<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductResource;
use App\Http\Resources\Api\V1\ProductsCollection;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct() {
        $this->product = new Product();
    }

    public function index(Request $request)
    {
        // categorias ,  marcas , like

        $products = $this->product->products()->getWithStatus('activo')->get();
        ProductsCollection::wrap('products');
        return new ProductsCollection($products);
    }
    public function productsByCategory($slugCategory) {
        $category = Category::findWithSlug($slugCategory);
        $products = $this->product->getProductsWithCategoryId($category->id)->get();
        ProductsCollection::wrap('products_category');
        return new ProductsCollection($products);
    }
    public function lastProducts() {
        $products = $this->product->getLastProducts(5)->get();
        ProductsCollection::wrap('latest_products');
        return new ProductsCollection($products);
    }
    public function productsSimilars($slug) {
        $product = Product::findWithSlug($slug);
        $products = $this->product->getProductsSimilar($product->marca_id,$product->id,3)->get();
        ProductsCollection::wrap('similar_products');
        return new ProductsCollection($products);
    }
    public function show($slug)
    {
        $product = Product::findWithSlug($slug);
        ProductResource::withoutWrapping();
        return new ProductResource($product);
    }

}
