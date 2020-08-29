<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryAddRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(){
        $this->category = new Category();
    }

    public function saveImage(Request  $request) {
        try {
            $route_file_save = 'images/categories/';
            $file = $request->file('file');
            $nameFile = 'image_category_'.rand(1000,100000).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($route_file_save),$nameFile);
            $request['url_imagen'] = $route_file_save.$nameFile;
        }catch (\Exception $e) {
            dd($e);
        }
    }

    public function deleteImage($urlImagen) {

        try {
            \File::delete(public_path($urlImagen));
        }catch (\Exception $e) {
            dd($e);
        }
    }

    public function index(Request $request)
    {
        $categories = $this->category->getAll($request->like,$request->status);
        return view('admin.categories.index',compact('categories'));
    }
    public function create()
    {
        $category = new Category();
        return view('admin.categories.create',compact('category'));
    }
    public function store(CategoryAddRequest $request)
    {
        try{

            $request['slug'] = Category::setSlug($request->nombre);

            $this->saveImage($request);
            $category = $this->category->add($request->all());

            if ($category) {
                return redirect('/administracion/categorias');
            }

            return back();

        }catch (\Exception $e){
            return back();
        }
    }
    public function show($id)
    {
        $category = $this->category->getCategoryWithId($id);
        return view('admin.categories.show',compact('category'));
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category'));
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        try {

            $category = $this->category->getCategoryWithId($id);

            if ($request->hasFile('file')) {
                $this->saveImage($request);
                $this->deleteImage($category->url_imagen);
            }

            $edit = $category->edit($request->all());

            if ($edit) {
                return redirect('administracion/categorias');
            }

            return back();

        }catch (\Exception $e) {
            dd($e);
        }
    }
    public function destroy($id)
    {
        //
    }
}
