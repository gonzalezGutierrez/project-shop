@extends('layout.admin_layout')
@section('title','Agregar al inventario')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Actualizar proveedor</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('/')}}">
                            Mi resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/proveedores')}}">
                            Proveedores
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/proveedores/'.$provider->id)}}">
                            {{$provider->nombre}}
                        </a>
                    </li>
                    <li><span>Actualizar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <form class="" action="{{asset('administracion/proveedores/'.$provider->id)}}" method="POST">
            @csrf
            @method('put')
            @include('admin.providers.form',['edit'=>false])
        </form>

    </section>
@stop
