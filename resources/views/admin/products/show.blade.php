@extends('layout.admin_layout')

@section('title','Inventario')

@section('content')
    <section role="main" class="content-body">
    <header class="page-header">
        <h2>Detalle del producto</h2>

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
                <li><span>{{$product->nombre}}</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

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

                    <a href="{{asset('administracion/compras?producto_id='.$product->id)}}"><i class="fa fa-dollar"></i> Historial de compras</a> <br>

                    <a href="" class=""><i class="fa fa-file-pdf-o"></i> Descargar ficha tecnica</a>

                    <hr class="dotted short">

                    <h6 class="text-muted">Descripción</h6>
                    <p>{{$product->descripcion}}</p>
                    <div class="clearfix">
                        <a class="text-uppercase text-muted pull-right" href="{{asset('administracion/productos/'.$product->id.'/edit')}}">Actualizar</a>
                    </div>

                    <hr class="dotted short">

                </div>
            </section>

        </div>
        <div class="col-md-8 col-lg-6">

            <div class="tabs">
                <ul class="nav nav-tabs tabs-primary">
                    <li class="active">
                        <a href="#overview" data-toggle="tab">{{$product->nombre}}</a>
                    </li>
                    <li>
                        <a href="#edit" data-toggle="tab">Costos</a>
                    </li>
                    <li>
                        <a href="#compra" data-toggle="tab">Compras</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="overview" class="tab-pane active">

                        <h4 class="mb-xlg">Información</h4>

                        <a target="_blank" href="{{asset('products/'.$product->slug)}}">Ver en mi tienda</a>

                        <div class="timeline timeline-simple mt-xlg mb-md">
                            <div class="tm-body">
                                <div class="tm-title">
                                    <h3 class="h5 text-uppercase">Registro: {{$product->created_at->format('d-m-y')}}</h3>
                                </div>
                                <ol class="tm-items">
                                    <li>
                                        <div class="tm-box">
                                            <p class="text-muted text-bold mb-none">Existencia</p>
                                            <p>
                                                {{$product->existencia}}
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tm-box">
                                            <p class="text-muted text-bold mb-none">Precio de venta</p>
                                            <p>
                                                ${{number_format($product->precio_venta,2,',','.')}}
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tm-box">
                                            <p class="text-muted text-bold mb-none">Categoria</p>
                                            <p>
                                                {{$product->category->nombre}}
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tm-box">
                                            <p class="text-muted text-bold mb-none">Marca</p>
                                            <p>
                                                {{$product->brand->nombre}}
                                            </p>
                                        </div>
                                    </li>
                                    <form action="{{asset('administracion/productos-estatus/'.$product->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        @if ($product->estatus == 'activo')
                                            <button type="submit" class="btn btn-danger">Inactivar producto</button>
                                        @else
                                            <button type="submit" class="btn btn-primary">Activar producto</button>
                                        @endif
                                    </form>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div id="edit" class="tab-pane">

                        <form action="{{asset('administracion/historial-precios')}}" class="form-horizontal" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{$product->id}}">
                            <h4 class="mb-xlg">Agrega un nuevo proveedor</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileFirstName">Proveedor</label>
                                    <div class="col-md-8">
                                        {!! Form::select('proveedor_id',$providers,old('proveedor_id'),['class'=>'form-control populate','data-plugin-selectTwo']) !!}
                                        @error('proveedor_id')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">Costo</label>
                                    <div class="col-md-8">
                                        {!! Form::text('precio',old('precio'),['class'=>'form-control']) !!}
                                        @error('precio')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <hr class="dotted tall">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div id="compra" class="tab-pane">
                        <form action="{{asset('administracion/compras')}}" class="form-horizontal" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{$product->id}}">
                            <h4 class="mb-xlg">Agrega una compra</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileFirstName">Proveedor</label>
                                    <div class="col-md-8">
                                        {!! Form::select('proveedor_id',$providers,old('proveedor_id'),['class'=>'form-control populate','data-plugin-selectTwo']) !!}
                                        @error('proveedor_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">Cantidad</label>
                                    <div class="col-md-8">
                                        {!! Form::text('cantidad',old('cantidad'),['class'=>'form-control']) !!}
                                        @error('cantidad')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">Total gastado</label>
                                    <div class="col-md-8">
                                        {!! Form::text('gasto',old('gasto'),['class'=>'form-control']) !!}
                                        @error('gasto')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <hr class="dotted tall">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">

            <h4 class="mb-md">Historial de costos</h4>
            <ul class="simple-card-list mb-xlg">
                @foreach($product->prices as $price)
                <li class="primary">
                    <h3>${{number_format($price->precio,2,',','.')}}</h3>
                    <p>{{$price->provider->nombre}}</p>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
    <!-- end: page -->
    </section>
@stop
