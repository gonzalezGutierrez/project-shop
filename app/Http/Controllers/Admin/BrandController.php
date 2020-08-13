<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandAddRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function __construct() {
        $this->brand = new  Brand();
    }

    public function index()
    {
        $brands = $this->brand->getBrands('activo');
        return view('admin.brands.index',compact('brands'));
    }
    public function create()
    {
        $brand = new Brand();
        return view('admin.brands.create',compact('brand'));
    }
    public function store(BrandAddRequest $request)
    {
        try {
            $register = $this->brand->add($request->all());
            if ($register) {
                return redirect('administracion/marcas');
            }
            return back();
        }catch (\Exception $e) {
            dd($e);
            return back();
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit',compact('brand'));
    }
    public function update(BrandAddRequest $request, $id)
    {
        try {

            $brand = Brand::findOrFail($id);

            $updated  = $brand->edit($request->validated());

            if ( $updated ) {
                return redirect('administracion/marcas');
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
