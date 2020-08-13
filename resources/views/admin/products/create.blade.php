@extends('layout.admin_layout')
@section('title','Agregar al inventario')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Agregar a inventario</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('/')}}">
                            Mi resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/productos')}}">
                            Productos
                        </a>
                    </li>
                    <li><span>Agregar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <form class="" action="{{asset('administracion/productos')}}" enctype="multipart/form-data" method="POST">
            @csrf
            @include('admin.products.form',['edit'=>false])
        </form>


        <!-- end: page -->
    </section>
@stop
