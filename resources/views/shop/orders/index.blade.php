@extends('layout.shop_layout')
@section('title','Mis datos')
@section('content')

    <section class="image-bg default-bg" style="background:#003b77 url({{asset('shop/assets/img/pattern.png')}}) repeat;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Gracias por ser parte de MyDibu Medical</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mt-4 mb-4">
            @include('layout.profile-sidebar')
            <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                <div class="card" style="background-color: #f8f8ff;">
                    <form action="{{asset('orders')}}" method="GET">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h5 class="card-title">Mis ordenes</h5>
                            <input type="search" value="{{$transaction}}" name="code_order" placeholder="Buscar por codigo de orden" class="form-control w-50">
                        </div>
                    </form>

                    <div class="card-body">
                        <div class=" table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Codigo de orden</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Factura</th>
                                        <th class="text-center">Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="text-center">{{$order->transaccion_codigo}}</td>
                                            <td class="text-center">{{$order->created_at->format('d-m-y')}}</td>
                                            <td class="text-center">${{number_format($order->total,2,'.',',')}}</td>
                                            <td class="text-center">
                                                @if($order->facturar)
                                                    <span class="label label-success"><i class="fa fa-check"></i></span>
                                                @else
                                                    <span class="label label-danger"><i class="fa fa-times"></i></span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{$order->estatus}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($transaction == false)
                            {{$orders->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
