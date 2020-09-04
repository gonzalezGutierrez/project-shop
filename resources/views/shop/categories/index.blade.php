@extends('layout.shop_layout')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="features-thumb-box">
                            <a href="{{asset('products-category/'.$category->slug)}}">
                                <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px;" class="img-responsive" alt="">
                            </a>
                            <div class="large-features-box-content">
                                <div class="features-content">
                                    <h6>{{$category->nombre}}</h6>
                                    <p>{{$category->productsCount()}} Producto(s)</p>
                                </div>
                                <a href="#" class="tw-readmore">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
@stop
