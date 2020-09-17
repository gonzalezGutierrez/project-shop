@extends('layout.shop_layout')
@section('title','Noticias')
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
                        Noticias
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-title-wrap pt-img-wrap" style="background:url({{asset('news.jpg')}}) no-repeat; background-size:cover;">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="pt-caption text-center mt-5">
                    <h1>Ultimas noticias en MyDibu Medical</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <section>
        <div class="container">
            
            <div class="row">

                @foreach($entries as $entry)
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-grid-wrap mb-4">
                            <div class="blog-grid-thumb">
                                <a href="blog-detail.html"><img src="{{asset('/'.$entry->url_image_news)}}" class="img-responsive" alt="" /></a>
                                <div class="bg-cat-info">
                                    <h6>MyDibu Medical News</h6>
                                    <span>{{$entry->created_at->format('M-Y')}}</span>
                                </div>
                            </div>
                            <div class="blog-grid-content">
                                <h4 class="cnt-gb-title"><a href="blog-detail.html">{{$entry->titulo}}</a></h4>
                                <p>{{$entry->encabezado}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                       {{$entries->links()}}
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <div class="clearfix"></div>
@stop