@extends('layout.admin_layout')
@section('title','Detalle del cliente')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Detalle del cliente</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            Resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('administracion/clientes')}}">
                            Clientes
                        </a>
                    </li>
                    <li><span>{{$customer->nombre}} {{$customer->apellido}}</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Información del cliente</h3>
                    </div>
                    <div class="panel-body">
                        <form action="">
                            <div class="form-group">
                                <div class="alert @if($customer->estatus == 'activo') alert-info @else alert-danger @endif">
                                    <strong class="">Este cliente esta actual {{$customer->estatus}}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Nombre','Nombre del cliente') !!}
                                {!! Form::text('nombre',$customer->nombre,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('apellido','Apellido del cliente') !!}
                                {!! Form::text('apellido',$customer->apellido,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Dirección de correo del cliente') !!}
                                {!! Form::text('email',$customer->email,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('telefono','Numero telefonico del cliente') !!}
                                {!! Form::text('telefono',$customer->telefono,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Direcciones registradas</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($ubications as $ubication)
                                <li class="list-group-item">
                                    Calle {{$ubication->calle}}
                                    N° {{$ubication->n_exterior}}
                                    y N° Interior {{$ubication->n_interior}}
                                    Colonia {{$ubication->colonia}}
                                    {{$ubication->municipio}} ,
                                    {{$ubication->estado}} ,
                                    {{$ubication->codigo_postal}}
                                    <br>
                                    <strong>Rerefencias: </strong>  {{$ubication->referencias}}
                                    <hr>
                                    <a href="" class="btn btn-info btn-sm">Actualizar</a>
                                    <form action="{{asset('address/'.$ubication->id)}}" style="display: inline-block;" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="panel">
                    <form action="">
                        <div class="panel-heading " style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 class="panel-title">Ordenes</h3>
                            <input type="search" value="{{$transaccion}}" placeholder="Buscar por codigo de orden" class="form-control" style="width: 30% !important;" name="code_order" value="">
                        </div>
                    </form>

                    <div class="panel-body">
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
                </div>
            </div>
        </div>
    </section>
@stop
