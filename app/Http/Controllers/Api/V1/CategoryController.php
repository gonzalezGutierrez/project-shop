<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CategoryCollection;
use App\Http\Resources\Api\V1\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct() {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->getAll('','activo');
        CategoryCollection::wrap('categories');
        return new CategoryCollection($categories);
    }
    public function show($slug)
    {
        $category = Category::findWithSlug($slug);
        if (!$category) {
            return response()->json(['msg'=>'Categoria no encontrada'],404);
        }
        CategoryResource::withoutWrapping();
        return new CategoryResource($category);
    }
}
