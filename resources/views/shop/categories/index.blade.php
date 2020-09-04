@extends('layout.shop_layout')
@section('content')
    <section id="portfolio">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Categorias en MyDibu Medical</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12 col-md-12 col-xs-12">


                    <div class="row portfolio-gallary">
                        @foreach($categories as $category)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item design development">
                            <div class="portfolio-wrap portfolio-inner">
                                <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px;" alt="project">
                                <div class="label">
                                    <div class="label-text">
                                        <a href="{{asset('products-category/'.$category->slug)}}" class="text-title">{{$category->nombre}}</a>
                                        <span class="lead-i">{{$category->productsCount()}} Producto(s)</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                                <div class="zoom">
                                    <a href="{{asset($category->url_imagen)}}" class="popup-box"  data-lightbox="image" data-title="{{$category->nombre}}">
                                        <i class="ti-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
