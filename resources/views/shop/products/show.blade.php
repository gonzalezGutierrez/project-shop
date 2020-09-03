@extends('layout.shop_layout')
@section('content')
    <div class="container-fluid breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{asset('/')}}">
                        Inicio
                    </a>
                    <a href="{{asset('/tienda')}}">
                        Tienda
                    </a>
                    <a href="javascript:void(0)">
                        <span>
                            <i class="ti-arrow-right"></i>
                        </span>
                        {{$product->nombre}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Product Info Start ================================== -->
    <section>
        <div class="container">

            <div class="row mb-5">

                <div class="col-lg-5 col-md-5">
                    <div class="product-thumb">
                        <img src="{{asset('/'.$product->url_imagen_principal)}}" class="img-fluid mx-auto" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="product-detail">

                        <h4 class="vr-single-product-title">{{$product->nombre}}</h4>

                        <div class="short-desc mt-2">
                            <p>{{$product->descripcion}}</p>
                        </div>
                        <span class="price title-small">${{number_format($product->precio_venta,2,'.',',')}}</span>

                        <div class="vr-add-form mt-3 mb-3">
                            <input type="number" class="form-control b-all" value="1"/>
                            <button type="button" class="btn btn-primary">Agregar al carrito</button>
                        </div>

                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">{{$product->SKU}}</span></span>
                            <span class="posted_in">Categoria:
                                <a href="#" rel="tag">{{$product->category->nombre}}</a>
							</span>
                            <span class="tagged_as">Modelo:
                                <a href="#" rel="tag">{{$product->brand->nombre}}</a>
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12 px-sm-2 col-sm-12">
                                <a href="{{asset('')}}" class="btn btn-info-gradiant"><i class="fa fa-download"></i> Descargar ficha tecnica</a>
                            </div>
                            <div class="col-md-6 col-xs-12 px-sm-2 col-sm-12">
                                <a href="{{asset('')}}" class="btn btn-primary-gradiant"><i class="fa fa-heart"></i> Agregar a la lista de deseos</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Product Detail -->
            <div class="row mb-5">
                <div class="col-lg-12 col-md-12">
                    <div class="custom-tab style-1">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Descripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">Caracteristicas</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p>{{$product->descripcion}}</p>
                            </div>
                            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                <p>{{$product->caracteristicas}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Product -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <h3 class="small-sec-title">Productos relacionados</h3>
                </div>

                @foreach($products as $product)
                    @include('shop.components.product.product_item')
                @endforeach

            </div>
            <!-- All Product List End -->

        </div>
    </section>
    <div class="clearfix"></div>
@stop
