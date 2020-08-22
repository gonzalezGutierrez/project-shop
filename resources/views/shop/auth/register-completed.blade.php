@extends('layout.shop_layout')
@section('content')
    <div class="container pb-5 mb-sm-4">
        <div class="pt-5">
            <div class="card py-3 mt-sm-3">
                <div class="card-body text-center">
                    <h3 class="h4 pb-3">Gracias por registrate.</h3>
                    <p class="mb-2">Hola {{$user->nombre}} {{$user->apellido_paterno}} {{$user->apellido_materno}} tu registro se ha efectuado correctamente.</p>
                    <p class="mb-2">Te ha llegado un correo de confimación a tu dirección de correo electronico<strong> {{$user->email}}</strong></p>
                </div>
            </div>
        </div>
    </div>
@stop
