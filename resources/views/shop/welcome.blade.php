@extends('layout.shop_layout')
@section('title','Bienvenido')
@section('content')
    <!-- ============================ Hero Slider Banner  Start================================== -->
    <div class="ct-header ct-header--slider ct-slick-custom-dots text-center" id="home">
        <div class="ct-slick-homepage" data-arrows="true" data-autoplay="true">

            <div class="ct-header slick-slide-animate tablex item" data-background="{{asset('shop/sliders/slider-1.png')}}">
                <div class="ct-u-display-tablex">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 slider-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ct-header slick-slide-animate tablex item" data-background="{{asset('shop/sliders/slider-2.png')}}">
                <div class="ct-u-display-tablex">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 slider-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ct-header tablex item" data-background="{{asset('shop/sliders/slider-3.png')}}">
                <div class="ct-u-display-tablex">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 slider-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct-header tablex item" data-background="{{asset('shop/sliders/slider-4.png')}}">
                <div class="ct-u-display-tablex">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 slider-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- .ct-slick-homepage -->
    </div>
    <div class="clearfix"></div>
    <!-- ============================ Hero Slider Banner End ================================== -->


    <!-- ============================ What We Do Start ================================== -->
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

    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-theme inverse-color">
                        <h2>MyDibu Medical Supplies Distribution Business</h2>
                        <p>
                            Empresa orgullosamente mexicana preocupada en tu salud y la de tus seres queridos.
                            Estamos comprometidos con el desarrollo y la salud en nuestro país.
                        </p>
                        <ul class="simple-list">
                            <li>Asesoría</li>
                            <li>Almacén</li>
                            <li>Distribución</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('shop/about/about-1.jfif')}});opacity: 1;">
                            <img src="{{asset('shop/about/about.jpg')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('shop/about/about-2.jfif')}});opacity: 1;">
                            <img src="{{asset('shop/about/about-2.jfif')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-dark-blue inverse-color">
                        <h2>MyDibu Medical</h2>
                        <p>
                            Ofrecemos profesionalidad y adaptabilidad en la distribución de productos de seguridad médica hospitalaria y personal.
                            Contamos con experiencia en el sector y personal especializado.
                            Capacitación y adiestramiento del personal que realiza las labores de limpieza y sanitización.
                        </p>
                        <ul class="simple-list">
                            <li>Venta y asesoría de artículos de seguridad medico hospitalaria y personal.</li>
                            <li>Ventas y asesoría:  55 6011 1766</li>
                            <li>Correo:  mydibumedical@gmail.com</li>
                            <li>Our Support is very dedicated for our customers</li>
                            <li>We provide 24x7 support with extended offer</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <!-- ============================ What We Do End ================================== -->

    <!-- ============================ Counter Start ================================== -->
    <section class="image-bg" style="background:#003b77 url(assets/img/banner-55.png) no-repeat;">
        <div class="container">
            <div class="ht-40"></div>
            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading light mx-auto">
                        <h2>Almacén</h2>
                        <p>Contamos con una variedad de sanitizantes y detergentes sanitizantes bactericidas,
                            fungicidas, viricidas, alguicidas y esporicidas amigables con el medio ambiente que
                            se adecuaran a sus necesidades medico hospitalarias,  negocio o empresa
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="count-box text-center">

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="count-box text-center">
                        <h2 class="count">24</h2>
                        <h5>Productos disponibles</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">

                </div>
            </div>

        </div>
        <div class="ht-40"></div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Counter End ================================== -->

    <section>
        <div class="container">
            <!-- Related Product -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <h3 class="small-sec-title">Lo mas nuevo en MyDibu Medical</h3>
                </div>
                @foreach($products as $product)
                    @include('shop.components.product.product_item')
                @endforeach
            </div>
            <!-- All Product List End -->

        </div>
    </section>
    <div class="clearfix"></div>


@stop
