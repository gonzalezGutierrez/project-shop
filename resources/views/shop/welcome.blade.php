@extends('layout.shop_layout')
@section('title','Bienvenido')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <h3 class="small-sec-title">Nuestras categorias</h3>
                    <a href="{{asset('categories')}}" class="text-uppercase">Ver todo</a>
                </div>
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="features-thumb-box">
                            <a href="{{asset('products-category/'.$category->slug)}}">
                                <img src="{{asset($category->url_imagen)}}" style="width: 100%; height: 200px" class="img-responsive" alt="">
                            </a>
                            <div class="large-features-box-content">
                                <div class="features-content">
                                    <h6>{{$category->nombre}}</a></h6>
                                    <p>{{$category->productsCount()}} Producto(s)</p>
                                </div>
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
    <!-- ============================ Counter End ================================== -->

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
