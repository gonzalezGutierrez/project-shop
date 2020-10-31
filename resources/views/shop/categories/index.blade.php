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
                            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                                <a href="{{asset('products-category/'.$category->slug)}}">
                                    <div class="large-features-box text-center mb-4 " style="padding: 0px !important;" data-aos="fade-up" data-aos-duration="1200">
                                        <div class=" d-table">
                                            <img src="{{asset($category->url_imagen)}}" style="width: 100% !important; height:230px;" class="img-responsive" alt="">
                                        </div>
                                        <h3 class="mt-2"  style="margin-bottom: 5px !important;">{{$category->nombre}}</h3> <br>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
