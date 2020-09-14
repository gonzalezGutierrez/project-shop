@extends('layout.admin_layout')
@section('title','Mis clientes')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Mis clientes</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            Resumen
                        </a>
                    </li>
                    <li><span>Clientes</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        @include('admin.customers.data')

    <!-- end: page -->
    </section>
@stop
