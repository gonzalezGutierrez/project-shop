@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Mis categorias</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            Dashboard
                        </a>
                    </li>
                    <li><span>Categorias</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
                <h2 class="panel-title">Categorias</h2>
                <a href="{{asset('administracion/categorias/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
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
                    @foreach($categories as $category)
                        <tr class="gradeU text-center">
                            <td style="line-height:30px;">{{$category->id}}</td>
                            <td style="line-height:30px;">{{$category->nombre}}</td>
                            <td style="line-height:30px;" class="center hidden-phone text-uppercase">{{$category->estatus}}</td>
                            <td style="line-height:30px;" class="center hidden-phone">
                                <a href="{{asset('administracion/categorias/'.$category->id.'/edit')}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- end: page -->
    </section>
@stop
