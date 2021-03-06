@extends('layout.shop_layout')
@section('title',$category->nombre)
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
                        {{$category->nombre}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-title-wrap pt-img-wrap" style="background:url({{asset('/'.$category->url_imagen)}}) no-repeat; background-position: center center; background-size: cover;">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="pt-caption text-center mt-5">
                    <h1>{{$category->nombre}}</h1>
                    <p><span class="text-white">{{$category->productsCount()}} producto(s) encontrados</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Who We Are Start ================================== -->
    <section>
        <div class="container">
            <!-- Title & Breadcrumbs-->
            <div class="row mb-4">
                <div class="col-md-12">

                    <div class="btn-group mr-lg-2 d-flex justify-content-between align-items-center flex-wrap">
                        <h4>Productos disponibles</h4>
                        <div class="dropdown show">
                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$category->nombre}}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{asset('products-category/'.$category->slug)}}">{{$category->nombre}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Title & Breadcrumbs End -->

            <!-- All Product List -->
            <div class="row">
                @foreach($products as $product)
                    @include('shop.components.product.product_item',['col_md'=>'3','col_lg'=>'3'])
                @endforeach

            </div>
            <!-- All Product List End -->

            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        {{$products->links()}}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
@stop
