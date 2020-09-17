@extends('layout.admin_layout')
@section('title','Inventario')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Imagenes disponibles</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            Resumen
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('administracion/productos')}}">
                            {{$product->nombre}}
                        </a>
                    </li>
                    <li><span>Imagenes</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <div class="row">
            <div class="col-md-4 col-lg-3">

                <section class="panel">
                    <div class="panel-body">
                        <div class="thumb-info mb-md">
                            <img src="{{asset('/'.$product->url_imagen_principal)}}" class="rounded img-responsive" alt="John Doe">
                        </div>

                        <div class="widget-toggle-expand mb-md">
                            <div class="widget-header">
                                <h6>{{$product->nombre}}</h6>
                            </div>
                        </div>

                        <h4>Agregar foto</h4>

                        <form action="{{asset('administracion/galerias/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" class="form-control" required >
                            </div> <br>
                            <button type="submit" class="btn btn-success btn-sm">Agregar</button>
                        </form>

                    </div>
                </section>

            </div>
            <div class="col-md-8 col-lg-8">

                <section class="panel">
                    <div class="panel-heading">
                        <h5>Galleria de imagenes</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                    <img src="{{asset('/'.$image->url_imagen)}}" style="width:100%; height:200px; margin-bottom:5px; margin-top:5px;" alt="">
                                    <form action="{{asset('administracion/galerias/'.$image->id)}}" method="POST" class="mt-2 mb-w">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm form-control btn-danger" style="margin-bottom:5px;">Eliminar</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </section>


@stop