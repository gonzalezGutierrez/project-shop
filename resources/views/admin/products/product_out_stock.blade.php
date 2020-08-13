@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Productos proximos a terminar</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            Resumen
                        </a>
                    </li>
                    <li><span>Productos</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        @include('admin.products.data')

    </section>
@stop
