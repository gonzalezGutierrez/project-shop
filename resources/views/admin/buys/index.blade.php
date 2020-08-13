@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">

            <h2>Compras</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            Resumen
                        </a>
                    </li>
                    <li><span>Compras</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">
                    Compras del producto
                    <a href="{{asset('administracion/productos/'.$product->id)}}">{{$product->nombre}}</a> |
                    Total: ${{number_format($product->totalBuys(),2,'.',',')}}
                </h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr class="text-center">
                        <th class="text-center">Cantidad</th>
                        <th class="text-center">Proveedor</th>
                        <th class="text-center">Gasto</th>
                        <th class="text-center">Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($product->buys as $buy)
                            <tr>
                                <td class="text-center">{{$buy->cantidad}}</td>
                                <td class="text-center">{{$buy->provider->nombre}}</td>
                                <td class="text-center">${{number_format($buy->gasto,2,'.',',')}}</td>
                                <td class="text-center">{{$buy->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- end: page -->
    </section>
@stop
