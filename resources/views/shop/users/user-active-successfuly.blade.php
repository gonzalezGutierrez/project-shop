@extends('layout.shop_layout')
@section('content')
    <div class="container pb-5 mb-sm-4">
        <div class="pt-5">
            <div class="card py-3 mt-sm-3">
                <div class="card-body text-center">
                    <h3 class="h4 pb-3">Cuenta activada</h3>
                    <p class="mb-2">{{$user->nombre}} {{$user->apellido_paterno}} {{$user->apellido_materno}} Tu cuenta ha sido activada correctamente.</p>
                    <a class="btn btn-secondary mt-3 mr-3" href="shop-style1-ls.html">Ir a perfil</a>
                </div>
            </div>
        </div>
    </div>
@stop
