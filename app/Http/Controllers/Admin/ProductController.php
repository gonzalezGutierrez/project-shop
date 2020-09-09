<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequestStore;
use App\Http\Requests\Admin\ProductRequestUpdate;
use App\Models\Brand;
use App\Models\Category;
use App\Models\HistorialPrecio;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct() {
        $this->product = new Product();
        $this->priceHistory = new HistorialPrecio();
        $this->properties  = [
            'nombre',
            'SKU',
            'slug',
            'precio_venta',
            'existencia',
            'url_imagen_principal',
            'caracteristicas',
            'descripcion',
            'especificaciones',
            'categoria_id',
            'marca_id'
        ];
    }

    public function saveImage(Request $request) {

        try {
            $route_file_save = 'images/products/';
            $file = $request->file('file');
            $nameFile = 'image_product_'.rand(1000,10000).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($route_file_save),$nameFile);
            $request['url_imagen_principal'] = $route_file_save.$nameFile;
            return true;
        }catch (\Exception $e) {
            return false;
        }
    }

    public function savePdf(Request $request) {
        try {
            $route_file_save = 'files/products/';
            $file = $request->file('pdf');
            $nameFile = 'ficha_tecnica_'.rand(1000,10000).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($route_file_save),$nameFile);
            $request['caracteristicas'] = $route_file_save.$nameFile;
            return true;
        }catch (\Exception $exception) {
            return false;
        }
    }

    public function deleteImage($urlImagen) {
        try {
            \File::delete(public_path($urlImagen));
            return  true;
        }catch (\Exception $e) {
            return  false;
        }
    }

    public function deletePdf($urlPdf) {
        try {
            \File::delete(public_path($urlPdf));
            return  true;
        }catch (\Exception $e) {
            return  false;
        }
    }

    public function index()
    {
        $products = $this->product->products()->get();
        return view('admin.products.index',compact('products'));
    }
    public function resultProducts(Request $request) {
        $products = $this->product->getProductsLike($request->like);
        return view('admin.products.result',compact('products'));
    }
    public function productOutStock() {
        $products = Product::getProductsWithMinStock(5)->get();
        return view('admin.products.product_out_stock',compact('products'));
    }

    public function create()
    {
        $providers = Provider::pluck('nombre','id');
        $brands    = Brand::pluck('nombre','id');
        $categories = Category::pluck('nombre','id');
        $product   = new Product();
        return view('admin.products.create',compact('providers','brands','product','categories'));
    }

    public function store(ProductRequestStore $request)
    {
        DB::beginTransaction();

        try {

            $request['slug'] = Product::setSlug($request->nombre);

            $this->saveImage($request);
            $this->savePdf($request);

            $product = $this->product->add($request->only($this->properties));

            $request['producto_id'] = $product->id;

            $this->priceHistory->add($request->only(['proveedor_id','producto_id','precio']));

            DB::commit();

            return redirect('administracion/productos/'.$product->id);

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return back();
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $providers = Provider::pluck('nombre','id');
        return view('admin.products.show',compact('product','providers'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $providers = Provider::pluck('nombre','id');
        $brands    = Brand::pluck('nombre','id');
        $categories = Category::pluck('nombre','id');
        return view('admin.products.edit',compact('providers','brands','product','categories'));
    }

    public function update(ProductRequestUpdate $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            if ($request->hasFile('file')) {
                $this->saveImage($request);
                $this->deleteImage($product->url_imagen_principal);
            }

            if ($request->hasFile('pdf')) {
                $this->savePdf($request);
                $this->deletePdf($product->caracteristicas);
            }

            $updated = $product->edit($request->all());

            if ($updated) {
                return redirect('administracion/productos/'.$product->id);
            }
            return back();
        }catch (\Exception $e) {
            dd($e);
            return back();
        }
    }

    public function changeStatus(Request $request, $productId) {

        try{

            $product = Product::findOrFail($productId);

            if ($product->estatus == 'activo') {
                $product->estatus = 'inactivo';
            }else{
                $product->estatus = 'activo';
            }

            $product->save();

            return redirect('/administracion/productos/'.$product->id);

        }catch(\Exception $e) {
            dd($e);
            return back();
        }
    }

    public function destroy($id)
    {
        //
    }
}
