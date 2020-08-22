@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Actualizar información</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            Resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('administracion/productos')}}">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('administracion/productos/'.$product->id)}}">
                            {{$product->nombre}}
                        </a>
                    </li>
                    <li><span>Actualizar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <form class="" action="{{asset('administracion/productos/'.$product->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            @include('admin.products.form',['edit'=>true])
        </form>
    </section>
@stop
