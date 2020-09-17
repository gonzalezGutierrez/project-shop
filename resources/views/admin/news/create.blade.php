@extends('layout.admin_layout')
@section('title','Noticias')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Agregar nueva noticia</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('/administracion')}}">
                            Resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('/administracion/news')}}">
                            Noticias
                        </a>
                    </li>
                    <li><span>Agregar</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <form class="" action="{{asset('administracion/news')}}" enctype="multipart/form-data" method="POST">
            @csrf
            @include('admin.news.form',['edit'=>false])
        </form>


        <!-- end: page -->
    </section>
@stop
