@extends('layout.admin_layout')
@section('title','Noticias')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Mis noticias</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('administracion')}}">
                            Resumen
                        </a>
                    </li>
                    <li><span>Noticias</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        @include('admin.news.data')

    <!-- end: page -->
    </section>
@stop
