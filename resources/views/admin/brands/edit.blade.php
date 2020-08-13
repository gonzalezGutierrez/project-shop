@extends('layout.admin_layout')
@section('title','Agregar al inventario')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Actualizar marca</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('/')}}">
                            Mi resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/marcas')}}">
                            Marcas
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/marcas/'.$brand->id)}}">
                            {{$brand->nombre}}
                        </a>
                    </li>
                    <li><span>Actualizar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <form class="" action="{{asset('administracion/marcas/'.$brand->id)}}" method="POST">
            @csrf
            @method('put')
            @include('admin.brands.form',['edit'=>false])
        </form>
        <!-- end: page -->
    </section>
@stop
