@extends('layout.shop_layout')
@section('title','MyDibu Medical')
@section('content')

    <div class="container-fluid breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="index.html">
                    Home
                    </a>
                    <a href="javascript:void(0)">
                        <span>
                            <i class="ti-arrow-right"></i>
                        </span>
                        Acerca de
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <section>
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h2>Acerca de</h2>
                        <p>
                            Empresa orgullosamente mexicana preocupada en tu
                            salud y la de tus seres queridos. Estamos
                            comprometidos con el desarrollo y la salud en nuestro
                            país.
                        </p>
                        <p>
                            Ofrecemos profesionalidad y adaptabilidad en
                            la distribución de productos de seguridad
                            médica hospitalaria y personal.

                            Contamos con experiencia en el sector y
                            personal especializado.
                        </p>
                        <p>
                            Capacitación y adiestramiento del
                            personal que realiza las labores de
                            limpieza y sanitización.

                            Elaboración de PNO´s

                            Protocolos de limpieza
                        </p>
                        <ul class="our-team-profile ts-light-bg">
                            <li><a href="https://www.facebook.com/MyDibu-Medical-116978430130886" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/mydibu.medical/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('h-1.jpg')}}" class="img-fluid mx-auto" alt="">
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Who We Are End ================================== -->

    <!-- ============================ What We Do & Who We Are Start ================================== -->
    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('h-2.jpg')}});opacity: 1; height: 480px;">
                            <img src="{{asset('h-2.jpg')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-theme inverse-color" style="height: 480px;">
                        <h2>MyDibu Medical</h2>
                        <p>
                            Innovación continua para aportar valor a nuestros clientes
                            En MyDibu Medical, nos sentimos orgullosos de la calidad y confiabilidad de nuestros productos, buscamos la innovación continua
                            como principal pilar de nuestra empresa, por lo que siempre encontraras artículos de ultima generación.
                            Es por eso que ofrecemos solo marcas selectas de artículos de protección personal, cuidado del paciente y productos preventivos.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pb-5 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content  bg-dark-blue inverse-color" style="height: 450px;">
                        <h2>Visión</h2>
                        <p>
                            Ser una empresa altamente reconocida
                            trabajando en pro de la salud, en conjunto con
                            profesionales altamente éticos y
                            comprometidos con la seguridad de la salud
                        </p>

                        <h2>Misión</h2>
                        <p>
                            Distribuir artículos innovadores de seguridad
                            médica hospitalaria y personal con una alta
                            calidad, asegurando tu salud y la de los
                            profesionales.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url({{asset('images/logo/vision-mision.jpg')}});opacity: 1; height: 450px;">
                            <img src="{{asset('h-1.jpg')}}" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop