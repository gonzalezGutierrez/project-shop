@extends('layout.admin_layout')
@section('title','Ordenes')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Ordenes</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('')}}">
                            Mi Resumen
                        </a>
                    </li>
                    <li><span>Ordenes</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <!--<header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
                <h2 class="panel-title">Categorias</h2>
                <a href="{{asset('administracion/categorias/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
            </header>-->
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr class="text-center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Cliente</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Factura</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-center">{{$order->transaction->transaccion_codigo}}</td>
                                <td class="text-center">{{$order->created_at}}</td>
                                <td class="text-center">{{$order->shoppingCart->customer->nombre}} {{$order->shoppingCart->customer->apellido}} </td>
                                <td class="text-center">${{number_format($order->total,2,'.',',')}}</td>
                                <td class="text-center">
                                    @if($order->factura)
                                        <span class="label label-success"><i class="fa fa-check"></i></span>
                                    @else
                                        <span class="label label-danger"><i class="fa fa-times"></i></span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <span class="text-uppercase label @if($order->estatus == 'pagada') label-success @endif">{{$order->estatus}}</span>
                                </td>
                                <td class="text-center">
                                    <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-{{$order->id}}" class="btn btn-sm btn-info"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="" class="btn btn-sm btn-info"><i class="fa fa-chevron-circle-right"></i></a>
                                </td>

                                @include('admin.orders.order_detail')

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- end: page -->
    </section>
@stop
