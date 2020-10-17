@extends('layout.shop_layout')
@section('title','Categorias')
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
                        Categorias
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
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
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 port-item design development">
                            <div class="portfolio-wrap portfolio-inner">
                                <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px;" alt="project">
                                <div class="label">
                                    <div class="label-text">
                                        <a href="{{asset('products-category/'.$category->slug)}}" style="font-size:13px; font-weight:800; color:#4da2fd !important;" class="text-title">{{$category->nombre}}</a>
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
