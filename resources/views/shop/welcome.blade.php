@extends('layout.shop_layout')
@section('title','Bienvenido')
@section('content')

    <div id="carouselExampleControls" data-interval="6000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('shop/sliders/s-1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('shop/sliders/s-2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('shop/sliders/s-4.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('shop/sliders/s-5.png')}}" alt="Third slide">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--categorias-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb- d-flex justify-content-between">
                    <h3 class="small-sec-title">Nuestras categorias</h3>
                    <a href="{{asset('categories')}}" class="text-uppercase">Ver todo</a>
                </div>
                @foreach($categories as $category)
                    <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                        <a href="{{asset('products-category/'.$category->slug)}}">
                            <div class="large-features-box text-center mb-4 " style="padding: 0px !important;" data-aos="fade-up" data-aos-duration="1200">
                                <div class=" d-table">
                                    <img src="{{asset($category->url_imagen)}}" style="width: 100% !important; height:360px;" class="img-responsive" alt="">
                                </div>
                                <h3 class="mt-2"  style="margin-bottom: 5px !important;">{{$category->nombre}}</h3>
                            </div>
                        </a>
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
                        <h2>Aportando Valor a la Salud</h2>
                        <p>
                            Desde 2017, MyDibu Medical ha brindado seguridad y tranquilidad a los
                            profesionales de la salud y pacientes con productos de alta calidad de un solo uso. <br>

                            Como distribuidor líder, MyDibu Medical sabe del vinculo extraordinario entre
                            medico y paciente. El cual tiene un impacto invaluable, por lo que nos
                            comprometemos a:

                        </p>
                        <ul class="simple-list">
                            <li>Salvaguardar la salud de tus pacientes y personal medico hospitalario.</li>
                            <li>Asegurar el suministro de nuestros productos que son fundamentales para la salud
                                de nuestros clientes y pacientes.</li>
                            <li>Contribuir con el control y propagación de infecciones.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('h-1.jpg')}});opacity: 1;">
                            <img src="{{asset('h-1.jpg')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('h-2.jpg')}});opacity: 1; height: 450px;">
                            <img src="{{asset('h-2.jpg')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-dark-blue inverse-color" style="height: 450px;">
                        <h2>MyDibu Medical</h2>
                        <p>
                            Innovación continua para aportar valor a
                            nuestros clientes
                        </p>
                        <p>
                            En MyDibu Medical, nos sentimos orgullosos de la calidad y
                            confiabilidad de nuestros productos, buscamos la innovación continua
                            como principal pilar de nuestra empresa, por lo que siempre encontraras
                            artículos de ultima generación.

                            Es por eso que ofrecemos solo marcas selectas de artículos de protección
                            personal, cuidado del paciente y productos preventivos.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <section class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between align-items-center col-md-12 col-sm-12 mb-4">
                <h3 class="small-sec-title">Ultimas noticias</h3>
                <a href="{{asset('news')}}" class="text-uppercase">Ver todo</a>
            </div>
            <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="thumbnail-image">
                            <img class="w-100" src="{{asset('/'.$latestEntry->url_image_news)}}" alt="">
                        </div>
                        <h6 class="mt-4">{{$latestEntry->encabezado}} - {{$latestEntry->created_at->format('M-Y')}}</h6> <br>
                        <a href="{{asset('news/'.$latestEntry->slug)}}">{{$latestEntry->titulo}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Noticias en MyDibu Medical</h4>
                            </div>
                            <div class="card-body">
                                @foreach($entries as $entry)
                                    {{$entry->encabezado}} - {{$entry->created_at->format('M-Y')}} <br> <br>
                                    <a href="{{asset('news/'.$entry->slug)}}" class="mt-2">{{$entry->titulo}}</a> <br> <hr>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image-bg" style="background:#003b77 url({{asset('shop/assets/img/banner-55.png')}}) no-repeat; width: 100%; ">
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
                        <h2 class="count">{{$productsCountRegister}}</h2>
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

    <section>
        <div class="container">
            <!-- Related Product -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <h3 class="small-sec-title">Lo mas nuevo en MyDibu Medical</h3>
                </div>
                @foreach($products as $product)
                    @include('shop.components.product.product_item' , ['col_md'=>'3','col_lg'=>'3'])
                @endforeach
            </div>
            <!-- All Product List End -->
        </div>
    </section>
    <div class="clearfix"></div>

@stop
