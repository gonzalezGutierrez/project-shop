@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Mis proveedores</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('')}}">
                            Mi resumen
                        </a>
                    </li>
                    <li><span>Proveedores</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
                <h2 class="panel-title">Proveedores</h2>
                <a href="{{asset('administracion/proveedores/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr class="text-center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($providers as $provider)
                        <tr class="gradeU text-center">
                            <td style="line-height:30px;">{{$provider->id}}</td>
                            <td style="line-height:30px;">{{$provider->nombre}}</td>
                            <td style="line-height:30px;" class="center hidden-phone text-uppercase">{{$provider->estatus}}</td>
                            <td style="line-height:30px;" class="center hidden-phone">
                                <a href="{{asset('administracion/proveedores/'.$provider->id.'/edit')}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </section>
@stop
