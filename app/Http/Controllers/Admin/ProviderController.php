<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProviderAddRequest;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function __construct() {
        $this->provider = new Provider();
    }

    public function index()
    {
        $providers = $this->provider->getProviders('activo');
        return view('admin.providers.index',compact('providers'));
    }
    public function create()
    {
        $provider = $this->provider;
        return view('admin.providers.create',compact('provider'));
    }

    public function store(ProviderAddRequest $request)
    {
        try {

            $registered = $this->provider->add($request->all());

            if ( $registered ) {
                return redirect('administracion/proveedores');
            }

            return back();

        } catch (\Exception $e) {

            return back();

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('admin.providers.edit',compact('provider'));
    }

    public function update(ProviderAddRequest $request, $id)
    {
        try {

            $provider = Provider::findOrFail($id);

            $updated = $provider->edit($request->all());

            if  ( $updated ) {
                return back();
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
