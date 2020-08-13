<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BuyAddRequest;
use App\Http\Requests\Admin\BuyIndexRequest;
use App\Models\Buy;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{

    public function __construct() {
        $this->buy = new Buy();
    }

    public function index(BuyIndexRequest $request)
    {
        $product = Product::findOrFail($request->producto_id);
        return view('admin.buys.index',compact('product'));
    }

    public function create()
    {
        //
    }

    public function store(BuyAddRequest $request)
    {
        DB::beginTransaction();
        try {

            $product = Product::findOrFail($request->producto_id);

            $register = $this->buy->add($request->all());

            $cantidad = $product->existencia + $register->cantidad;

            $product->setStock($cantidad);

            if ( $register ) {
                DB::commit();
                return redirect('administracion/compras?producto_id='.$request->producto_id);
            }
            return back();
        }catch (\Exception $e) {
            DB::rollBack();
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
