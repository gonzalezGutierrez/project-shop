@extends('layout.shop_layout')
@section('title','Detalle de la orden')
@section('content')
    <section class="image-bg default-bg" style="background:#003b77 url({{asset('shop/assets/img/pattern.png')}}) repeat;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Estatus de la orden:  <span class="label label-info text-uppercase">{{$order->estatus}}</span></h3>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row  mt-4 mb-4">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                <div class="card" style="background-color: #f8f8ff;">
                    <div class="card-body">
                        <a href="#">Orden #{{$order->id}}</a>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            @if($order->facturar)
                                <i class="fa fa-file-pdf-o" style="font-size: 68px; color:darkred;"></i> <br>
                                @if($order->invoice)
                                    <a href="{{asset($order->invoice->url_archivo_factura)}}" target="_blank">Descargar factura</a>
                                @else
                                    <span class="text-danger">La factura no ha sido subida</span>
                                @endif
                            @else
                                <a href="">No has requerido factura</a>
                            @endif
                        </div>
                        <hr>
                        <a href="{{asset('orders')}}">Ver ordenes</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                <div class="card" style="background-color: #f8f8ff;">
                    <div class="card-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12 text-left">
                                                <strong class="text-bold text-uppercase">Codigo de restreo de orden</strong>
                                            </div>
                                            <div class="col-md-12 text-left">
                                                <span class=" text-uppercase">{{$order->transaction->transaccion_codigo}}</span>
                                                <br>
                                                <span>Fecha de orden: {{$order->created_at}}</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-2">
                                            <div class="col-md-12 text-left">
                                                <strong class="text-bold text-uppercase">Dirección de envio</strong>
                                            </div>
                                            <div class="col-md-12 text-left">
                                                <p>
                                                    Calle {{$order->shoppingCart->ubication->ubication->calle}}
                                                    N° {{$order->shoppingCart->ubication->ubication->n_exterior}}
                                                    y N° Interior {{$order->shoppingCart->ubication->ubication->n_interior}}
                                                    Colonia {{$order->shoppingCart->ubication->ubication->colonia}}
                                                    {{$order->shoppingCart->ubication->ubication->municipio}} ,
                                                    {{$order->shoppingCart->ubication->ubication->estado}} ,
                                                    {{$order->shoppingCart->ubication->ubication->codigo_postal}}
                                                    <br>
                                                    <strong>Rerefencias: </strong>  {{$order->shoppingCart->ubication->ubication->referencias}}
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-2">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase">Cliente</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="text-bold text-uppercase">{{$order->shoppingCart->customer->nombre}} {{$order->shoppingCart->customer->apellido}}</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-2">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase">Forma de pago</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="text-bold text-uppercase">{{$order->transaction->paymentMethod->nombre}}</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-2">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase">Producto</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="text-bold text-uppercase">total</span>
                                            </div>
                                        </div>
                                        @foreach($order->shoppingCart->products as $product)
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    <span>{{$product->product_name}} ({{$product->amount}})</span>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <span>${{number_format($product->subtotal,2)}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                        <hr>
                                        <div class="row justify-content-md-between">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase font-bold">Subtotal</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <strong class="text-bold text-uppercase font-bold">${{number_format($order->shoppingCart->amount(),2,'.',',')}}</strong>
                                            </div>
                                        </div>
                                        <div class="row justify-content-md-between">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase font-bold">Envio:</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="text-bold text-uppercase font-bold">
                                                    @if ($order->shoppingCart->amount()  < 2000)
                                                        $100.00
                                                    @else
                                                        $0.00
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row justify-content-md-between">
                                            <div class="col-md-6 text-left">
                                                <strong class="text-bold text-uppercase font-bold">Total</strong>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span class="text-bold text-uppercase font-bold" style="font-weight: bold; font-size: 18.0;  color:darkgreen;">${{number_format($order->total,2,'.',',')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
