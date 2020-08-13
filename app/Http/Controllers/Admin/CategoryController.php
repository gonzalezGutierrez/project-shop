<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryAddRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(){
        $this->category = new Category();
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

            $category = $this->category->add($request->validated());

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
    public function update(CategoryAddRequest $request, $id)
    {
        try {

            $category = $this->category->getCategoryWithId($id);

            $edit = $category->edit($request->validated());

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
