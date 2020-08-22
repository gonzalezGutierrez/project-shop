@extends('layout.admin_layout')
@section('title','Agregar al inventario')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Actualizar categoria</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('/')}}">
                            Mi resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/categorias')}}">
                            Categorias
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/categorias/'.$category->id)}}">
                            {{$category->nombre}}
                        </a>
                    </li>
                    <li><span>Actualizar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <form class="" action="{{asset('administracion/categorias/'.$category->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            @include('admin.categories.form',['edit'=>true])
        </form>


        <!-- end: page -->
    </section>
@stop
