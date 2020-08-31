@extends('layout.shop_layout')
@section('content')
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">
                        <img class="img-fluid" src="{{asset('shop/img/home/hero-banner.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">
                        <h4>Aportando Valor a la Salud</h4>
                        <h1>MyDibu Medical</h1>
                        <p>Empresa orgullosamente mexicana preocupada en tu salud y la de tus seres queridos,
                            estamos comprometidos con el desarrollo y la salud en nuestro país.</p>
                        <a class="button button-hero text-uppercase" href="#">Seguir orden</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p></p>
                <h2>Nuestras <span class="section-intro__style">Categorias</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                @foreach($categories as $category)
                    <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="img-fluid" style="border-radius: 3px;" src="{{asset('/'.$category->url_imagen)}}" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-product__title"><a href="{{asset('categories/'.$category->slug)}}">{{$category->nombre}}</a></h4>
                        <p class="card-product__price">{{$category->productsCount()}} Producto(s)</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Productos nuevos</p>
                <h2>Lo mas nuevo en  <span class="section-intro__style">MyDibu Medical</span></h2>
            </div>
            <div class="row">
                @foreach($products as $product)
                    @include('shop.components.product.product_item')
                @endforeach
            </div>
        </div>
    </section>

    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
             data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="offer__content text-center">
                        <h3>Unete a MyDibu Medical</h3>
                        <h4>Rergistrate como PYME</h4>
                        <p>Obten descuentos en productos</p>
                        <a class="button button--active mt-3 mt-xl-4" href="#">Solicítalo ya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop
