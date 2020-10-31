@extends('layout.shop_layout')
@section('title','Tienda')
@section('content')
    <div class="container-fluid breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{asset('/')}}">
                        Inicio
                    </a>
                    <a href="javascript:void(0)">
                        <span>
                            <i class="ti-arrow-right"></i>
                        </span>
                       Tienda MyDibu Medical
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-title-wrap pt-img-wrap" style="background:url({{asset('shop/about/about-2.jfif')}}) no-repeat; background-size: cover; background-position: center;">
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
                            <a class="btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$products->count()}} producto(s) encontrados
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <!--<form action="{{asset('shop-general')}}" class="col-lg-4 col-md-12 col-sm-12 mb-4" method="get">


                </form>-->
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-search"></i>Buscar aquí</h4>
                        </div>

                        <div class="side-widget-body p-t-10">
                            <div class="input-group">
                                <input type="search" id="inputFiltrar" name="q_like" class="form-control" placeholder="Buscar producto">
                            </div>
                        </div>
                    </div>

                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-hand-point-right"></i>Filtra por categorias</h4>
                        </div>
                        <div class="category">
                            <ul class="no-ul-list" style="height:130px; overflow-y:scroll;">
                                @foreach($categories as $category)
                                    <li>
                                        <input id="checkbox-{{$category->id}}" value="{{$category->id}}"  class="checkbox-custom" name="q_category[]" type="checkbox">
                                        <label style="font-size:14px; " for="checkbox-{{$category->id}}" class="checkbox-custom-label">{{$category->nombre}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="side-widget">
                        <div class="side-widget-header border-0">
                            <h4><i class="ti-hand-point-right"></i>Filtrar por marca</h4>
                        </div>
                        <div class="company-brands">
                            <ul class="no-ul-list" style="height: 130px; overflow-y:scroll;">
                                @foreach($brands as $brand)
                                    <li>
                                        <input id="brand-{{$brand->id}}" class="checkbox-custom" value="{{$brand->id}}" name="q_brand[]" type="checkbox" >
                                        <label  style="font-size:14px; " for="brand-{{$brand->id}}" class="checkbox-custom-label">{{$brand->nombre}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <button type="button" id="btnFiltrar" class="btn btn-primary"><i class="fa fa-search"></i> Filtrar</button>
                </div>



                <!-- All Product -->
                <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                    <div class="row">
                        @foreach($products as $product)
                            @include('shop.components.product.product_item' , ['col_md'=>'4','col_lg'=>'4'])
                        @endforeach
                    </div>
                    {{$products->links()}}
                </div>
            </div>
            <!-- All Product List End -->

        </div>
    </section>
    <div class="clearfix"></div>
@stop

@section('js')
    <script src="{{asset('shop/assets/js/buscador_tienda.js')}}"></script>
@stop
