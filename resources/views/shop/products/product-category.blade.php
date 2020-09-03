@extends('layout.shop_layout')

@section('content')
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
                <div class="col-md-5 align-self-center">
                    <h4 class="theme-cl">Productos</h4>
                </div>
                <div class="col-md-7 text-right">

                    <div class="btn-group mr-lg-2">
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$category->nombre}}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Latest Items</a>
                                <a class="dropdown-item" href="#">Recent Items</a>
                                <a class="dropdown-item" href="#">Most Selling</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Title & Breadcrumbs End -->

            <!-- All Product List -->
            <div class="row">
                @foreach($products as $product)
                    @include('shop.components.product.product_item')
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
