@extends('layout.shop_layout')
@section('title','Tienda')
@section('content')
    <div class="page-title-wrap pt-img-wrap" style="background:url(https://via.placeholder.com/1920x900) no-repeat;">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="pt-caption text-center mt-5">
                    <h1>Nuestros productos</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <!-- Title & Breadcrumbs-->
            <div class="row mb-4">
                <div class="col-md-5 align-self-center">
                    <h4 class="theme-cl">Buscar productos</h4>
                </div>
                <div class="col-md-7 text-right">

                    <div class="btn-group mr-lg-2">
                        <div class="dropdown show">
                            <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$products->count()}} producto(s) encontrados
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Title & Breadcrumbs End -->

            <!-- All Product List -->
            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4 hidden-sm">

                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-search"></i>Buscar aquí</h4>
                        </div>

                        <div class="side-widget-body p-t-10">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar producto">
                                <span class="input-group-btn">
											<button type="button" class="btn btn-primary btn-lg">Go</button>
										</span>
                            </div>
                        </div>
                    </div>

                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-hand-point-right"></i>Filtra por categorias</h4>
                        </div>
                        <div class="category">
                            <ul class="no-ul-list">
                                @foreach($categories as $category)
                                    <li>
                                        <input id="checkbox-{{$category->id}}" class="checkbox-custom" name="checkbox-{{$category->id}}" type="checkbox" checked="">
                                        <label for="checkbox-{{$category->id}}" class="checkbox-custom-label">{{$category->nombre}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-hand-point-right"></i>Filtrar por modelo</h4>
                        </div>
                        <div class="company-brands">
                            <ul class="no-ul-list">
                                @foreach($brands as $brand)
                                    <li>
                                        <input id="brand-{{$brand->id}}" class="checkbox-custom" name="checkbox-{{$brand->id}}" type="checkbox" checked="">
                                        <label for="brand-{{$brand->id}}" class="checkbox-custom-label">{{$brand->nombre}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-primary"><i class="fa fa-search"></i> Filtrar</button>

                </div>

                <!-- All Product -->
                <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <div class="product-wrap">
                                    <div class="product-caption">
                                        <div class="product-caption-info">

                                            <div class="product-caption-thumb">
                                                <div class="">
                                                    <img src="{{asset('/'.$product->url_imagen_principal)}}" style="width: 100%; height: 280px;" class="img-fluid mx-auto" alt="">
                                                </div>
                                            </div>

                                            <div class="uc_product_details">
                                                <a href="{{asset('/products/'.$product->slug)}}">
                                                    <span>{{$product->nombre}}</span>
                                                </a>
                                                <span class="uc_price">${{number_format($product->precio_venta,2,'.',',')}}</span>

                                                <div class="">
                                                    <a href="#" class="btn btn-outline-info"><i class="fa fa-shopping"></i> Agregar al carrito</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- All Product List End -->

        </div>
    </section>
    <div class="clearfix"></div>
@stop
