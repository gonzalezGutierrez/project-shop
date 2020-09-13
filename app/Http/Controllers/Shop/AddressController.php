<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $ubications = Ubicacion::join('ubication_users','ubicaciones.id','ubication_users.ubicacion_id')
            ->where('ubication_users.usuario_id',$user->id)
            ->where('ubicaciones.estatus',true)
            ->select('ubicaciones.*')
            ->orderBy('ubicaciones.id','desc')
            ->get();

        return view('shop.address.index',compact('ubications'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $ubication = Ubicacion::findOrFail($id);
        $ubication->estatus = !$ubication->estatus;
        $ubication->save();
        return back();
    }
}
