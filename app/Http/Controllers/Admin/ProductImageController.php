<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\ProductImage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    
    public function saveImage(Request $request) {

        try {
            $route_file_save = 'images/products/';
            $file = $request->file('file');
            $nameFile = 'image_product_'.rand(1000,10000).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($route_file_save),$nameFile);
            $request['url_imagen'] = $route_file_save.$nameFile;
            return true;
        }catch (\Exception $e) {
            return false;
        }
    }

    public function index($productSlug)
    {
        $product = Product::findWithSlug($productSlug);
        $images  = ProductImage::where('producto_id',$product->id)->get();
        
        return view('admin.products.gallery',compact('product','images'));
    }
    public function store(Request $request,$productId)
    {
        try{

            $product = Product::findOrFail($productId);
            $this->saveImage($request);
            ProductImage::create(['producto_id'=>$product->id,'url_imagen'=>$request->url_imagen]);
            return back();

        }catch(\Exception $e) {
            dd($e);
            return back();
        } 
    }
    public function destroy($productImageId)
    {
        try{
            $productImage = ProductImage::findOrFail($productImageId);
            \File::delete(public_path($productImage->url_imagen));
            $productImage->delete();
            return back();
        }catch(\Exception $e) {
            dd($e);
            return back();
        }
    }
}
