@extends('layout.shop_layout')
@section('title',$entry->titulo)
@section('content')
    <section>
        <div class="container">
            
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <article class="blog-news big-detail-wrap">
                        <div class="blog-detail-wrap">
                        
                            <!-- Featured Image -->
                            <figure class="img-holder">
                                <a href="{{asset('/news/'.$entry->slug)}}"><img src="{{asset('/'.$entry->url_image_news)}}" class="img-responsive" alt="News"></a>
                                <div class="blog-post-date theme-bg">
                                    {{$entry->created_at->format('M-Y')}}
                                </div>
                            </figure>
                            
                            <!-- Blog Content -->
                            <div class="full blog-content">
                                <div class="post-meta">{{$entry->encabezado}}</div>
                                <a href="{{asset('/news/'.$entry->slug)}}"><h3>{{$entry->titulo}}</h3></a>
                                <div class="blog-text">
                                    <p>
                                        {{$entry->descripcion}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                            
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sidebar">
                        
                        <div class="side-widget">
                            <div class="side-widget-header">
                                <h4><i class="ti-check-box"></i>Ultimas noticias</h4>
                            </div>
                            <div class="side-widget-body p-t-10">
                                <div class="side-list">
                                    <ul class="side-blog-list">
                                        @foreach($entries as $entry)
                                        <li>
                                            <a href="{{asset('/news/'.$entry->slug)}}">
                                                <div class="blog-list-img">
                                                    <img src="{{asset('/'.$entry->url_image_news)}}" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                            <div class="blog-list-info">
                                                <h5><a href="{{asset('/news/'.$entry->slug)}}" title="blog">{{$entry->encabezado}}</a></h5>
                                                <div class="blog-post-meta">
                                                    <span class="updated">{{$entry->created_at->format('M-Y')}}</span></a>					
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <div class="clearfix"></div>
@stop