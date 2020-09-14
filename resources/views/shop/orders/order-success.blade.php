@extends('layout.shop_layout')
@section('content')
    <div class="container pb-5 mb-sm-4">
        <div class="pt-5">
            <div class="card py-3 mt-sm-3">
                <div class="card-body text-center">
                    <h3 class=" text-uppercase text-center mt-3">Orden generada</h3>
                    <i class="fa fa-check" style="font-size: 48px; color:green;"></i>
                    <p class="mb-2">{{Auth::user()->nombre}} {{Auth::user()->apellido}} Tu orden se ha generado correctamente.</p>
                    <a class="btn btn-info btn-sm mt-3 mr-3" href="{{asset('orders/'.$order->transaccion_codigo)}}">Codigo de restrastreo:  {{$order->transaccion_codigo}}</a>
                </div>
            </div>
        </div>
    </div>
@stop
