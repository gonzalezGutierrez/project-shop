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
    <section>
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


                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3">
                                <a href="{{asset('products-category/'.$category->slug)}}">
                                    <div class="card" style="border-top:3px solid #003b77;">
                                        <div class="card-header" style="padding:0px !important;">
                                            <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px;" alt="project">
                                        </div>
                                        <div class="card-body">
                                            <span class="text-dark" style="font-size:16px; font-weight:bold;">{{$category->nombre}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 port-item design development">
                                <a href="{{asset('products-category/'.$category->slug)}}" class="text-title">
                                    <div class="portfolio-wrap portfolio-inner">
                                        <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px;" alt="project">
                                        <div class="label">
                                            <div class="">
                                                <span style="color:#000 !important;"></span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>-->
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
