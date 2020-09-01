{{--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyDibuMedical - @yield('title')</title>
    <link rel="icon" href="{{asset('logo.jpg')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('shop/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('shop/vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('shop/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('shop/css/style.css')}}">

</head>

<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="/"><img src="{{asset('logo.jpg')}}" style="width: 180px; height: 90px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Inicio</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Tienda</a>
                            <!--<ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                                <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                            </ul>-->
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Categorias</a>
                            <!--<ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>-->
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Marcas</a>
                            <!--<ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                            </ul>-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Miembro PYME</a></li>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item"><button><i class="ti-shopping-cart"></i><span
                                    class="nav-shop__circle">3</span></button> </li>
                        @guest
                            <li class="nav-item">
                                <a class="button button-header" href="{{asset('/login')}}">Acceder</a>
                            </li>
                        @endguest
                        <li class="nav-item submenu dropdown">
                            @auth()
                                @if (Auth::user()->userIsAdmin())
                                <a class="button button-header" href="{{asset('/administracion/productos')}}">
                                    <i class="ti-user"></i>
                                    {{Auth::user()->nombre}}
                                </a>
                                @else
                                    <a class="button button-header" href="{{asset('/profile')}}">
                                        <i class="ti-user"></i>
                                        {{Auth::user()->nombre}}
                                    </a>
                                @endif
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<main class="site-main">
    @yield('content')

    <section class="subscribe-position">
        <div class="container">
            <div class="subscribe text-center">
                <img src="{{asset('logo.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%;" alt="">
                <h3 class="subscribe__title">Obtenga actualizaciones desde cualquier lugar</h3>
                <p></p>
                <div id="mc_embed_signup">
                    <form target="_blank"
                          action="#"
                          method="get" class="subscribe-form form-inline mt-5 pt-1">
                        <div class="form-group ml-sm-auto">
                            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Ingresa tu email">
                        </div>
                        <button class="button button-subscribe mr-auto mb-1" type="submit">Suscribete ahora</button>

                    </form>
                </div>

            </div>
        </div>
    </section>
</main>


<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets text-center">
                        <img src="{{asset('logo.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%;" alt="">
                        <h3 class="text-white">MyDibu Medical</h3>
                        <p>
                            Ofrecemos profesionalidad y adaptabilidad en la distribución de productos de seguridad médica hospitalaria y personal.
                            Contamos con experiencia en el sector y personal especializado.
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Enlaces rapidos</h4>
                        <ul class="list">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Tienda</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Marcas</a></li>
                            <li><a href="#">Miembro PYME</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Galeria</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="img/gallery/r1.jpg" alt=""></li>
                            <li><img src="img/gallery/r2.jpg" alt=""></li>
                            <li><img src="img/gallery/r3.jpg" alt=""></li>
                            <li><img src="img/gallery/r5.jpg" alt=""></li>
                            <li><img src="img/gallery/r7.jpg" alt=""></li>
                            <li><img src="img/gallery/r8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contactanos</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Ventas y asesoría
                            </p>
                            <p>55 6011 1766</p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Dirección de correo
                            </p>
                            <p>
                                mydibumedical@gmail.com
                            </p>
                            <p>Venta y asesoría de artículos de seguridad medico hospitalaria y personal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | MyDibu Medical
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->



<script src="{{asset('shop/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('shop/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('shop/vendors/skrollr.min.js')}}"></script>
<script src="{{asset('shop/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('shop/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('shop/vendors/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('shop/vendors/mail-script.js')}}"></script>
<script src="{{asset('shop/js/main.js')}}"></script>
</body>

</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - MyDibu Medical</title>

    <!-- All Plugins Css -->
    <link href="{{asset('shop/assets/css/plugins.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('shop/assets/css/styles.css')}}" rel="stylesheet">
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Unico</p>
    </div>
</div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <div class="header header-light shadow">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="shop/assets/img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li><a href="#">Niche Homepages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="index.html">Startup</a></li>
                                        <li><a href="business.html">Business</a></li>
                                        <li><a href="agency.html">Agency</a></li>
                                        <li><a href="seo-smo.html">SEO / SMO</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Smart Homepages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="landing-page.html">Landing Page</a></li>
                                        <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                        <li><a href="software.html">Software & App</a></li>
                                        <li><a href="corporate.html">Corporate</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Standard Homepages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="digital-studio.html">Digital Studio</a></li>
                                        <li><a href="creative.html">Creative Design</a></li>
                                        <li><a href="business-corporate.html">Business & Corporate</a></li>
                                        <li><a href="landing-one.html">Landing Page One</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Extra Landing Pages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="landing-two.html">Landing Page Two</a></li>
                                        <li><a href="landing-three.html">Landing Page Three</a></li>
                                        <li><a href="landing-four.html">Landing Page Four</a></li>
                                        <li><a href="landing-five.html">Landing Page Five</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">Pages<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-2.html">About Us 2</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Say Hello</a></li>
                                <li><a href="contact-2.html">Say Hello 2</a></li>
                                <li><a href="our-team.html">Our Team</a></li>
                                <li><a href="our-team-2.html">Our Team 2</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="error-page.html">Error Page</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Blog<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-grid-2.html">Blog grid 2</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Shop<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li><a href="#">Product Shop<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="shop-2-column.html">Shop 2 Columns</a></li>
                                        <li><a href="shop-3-column.html">Shop 3 Columns</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop With Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop With Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-detail.html">Shop Details</a></li>
                                <li><a href="add-to-cart.html">Add To Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Elements<span class="submenu-indicator"></span></a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li><a href="#">Elements 1<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="call-to-action.html">Call To Action</a></li>
                                        <li><a href="card.html">Card</a></li>
                                        <li><a href="counter.html">Counter</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Elements 2<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="form-element.html">Form Element</a></li>
                                        <li><a href="list-style.html">List Style</a></li>
                                        <li><a href="notification.html">Notifications</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Elements 3<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="tab.html">Tabs</a></li>
                                        <li><a href="tables.html">Tables</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="video.html">Video</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Elements 4<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu" style="display: none;">
                                        <li><a href="features.html">Features Box</a></li>
                                        <li><a href="cover.html">Cover</a></li>
                                        <li><a href="our-team.html">Team</a></li>
                                        <li><a href="our-team-2.html">Team 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li class="add-listing theme-bg">
                            <a href="#" href="#" data-toggle="modal" data-target="#getstarted">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->


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
                        <img src="{{asset($category->url_imagen)}}" style="width: 360px; height: 200px;" class="img-responsive" alt="">
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
                    <h3 class="small-sec-title">Related Products</h3>
                </div>
                <!-- Single Product -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="product-wrap">
                        <div class="product-caption">
                            <div class="product-caption-info">

                                <div class="product-caption-thumb">
                                    <div class="product-caption-content">
                                        <img src="https://via.placeholder.com/800x800" class="img-fluid mx-auto" alt=""></div>
                                </div>

                                <div class="uc_product_details">
                                    <span>Soft Product Box</span>
                                    <span class="uc_price">$950</span>

                                    <div class="uc_view_cart">
                                        <a href="#">Add To Cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="product-wrap">
                        <div class="product-caption">
                            <div class="product-caption-info">

                                <div class="product-caption-thumb">
                                    <div class="product-caption-content">
                                        <img src="https://via.placeholder.com/800x800" class="img-fluid mx-auto" alt=""></div>
                                </div>

                                <div class="uc_product_details">
                                    <span>Soft Product Box</span>
                                    <span class="uc_price">$950</span>

                                    <div class="uc_view_cart">
                                        <a href="#">Add To Cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Product -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="product-wrap">
                        <div class="product-caption">
                            <div class="product-caption-info">

                                <div class="product-caption-thumb">
                                    <div class="product-caption-content">
                                        <img src="https://via.placeholder.com/800x800" class="img-fluid mx-auto" alt=""></div>
                                </div>

                                <div class="uc_product_details">
                                    <span>Soft Product Box</span>
                                    <span class="uc_price">$950</span>

                                    <div class="uc_view_cart">
                                        <a href="#">Add To Cart</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- All Product List End -->

        </div>
    </section>
    <div class="clearfix"></div>

    <!-- ============================ Benifits & Advance Features ================================== -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="col text-center">
                        <div class="sec-heading mx-auto">
                            <h2>Benifits & Advance Features</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-target"></i></div>
                            <div class="veticle-features-content">
                                <h4>Easy Work</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-reload"></i></div>
                            <div class="veticle-features-content">
                                <h4>Collaborative</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-desktop"></i></div>
                            <div class="veticle-features-content">
                                <h4>Flexible Design</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-share"></i></div>
                            <div class="veticle-features-content">
                                <h4>Upgrading System</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="assets/img/iphone.png" class="img-fluid mx-auto" alt="">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-location-pin"></i></div>
                            <div class="veticle-features-content">
                                <h4>Work Processing</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-dashboard"></i></div>
                            <div class="veticle-features-content">
                                <h4>Admin dashboard</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-settings"></i></div>
                            <div class="veticle-features-content">
                                <h4>Fully Customize</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Features -->
                    <div class="veticle-features mb-4">
                        <div class="veticle-features-item">
                            <div class="veticle-large-features-box"><i class="ti-ruler-pencil"></i></div>
                            <div class="veticle-features-content">
                                <h4>100% Unique Content</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="clearfix"></div>
    </section>
    <!-- ============================ Benifits & Advance Features ================================== -->

    <!-- ============================ What We Do & Who We Are Start ================================== -->
    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-theme inverse-color">
                        <h2>Why People love Unico?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                        <ul class="simple-list">
                            <li>We Provide Powerful features</li>
                            <li>We love Our Customers</li>
                            <li>Join us and get best offer</li>
                            <li>Our Support is very dedicated for our customers</li>
                            <li>We provide 24x7 support with extended offer</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url(https://via.placeholder.com/1200x800);opacity: 1;">
                            <img src="https://via.placeholder.com/1200x800" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                    <div class="image-block-holder">
                        <div class="image-block-holder-img" style="background: url(https://via.placeholder.com/1200x800);opacity: 1;">
                            <img src="https://via.placeholder.com/1200x800" class="img-responsive img-holder" alt=""/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="image-block-content bg-dark-blue inverse-color">
                        <h2>Why People love Unico?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                        <ul class="simple-list">
                            <li>We Provide Powerful features</li>
                            <li>We love Our Customers</li>
                            <li>Join us and get best offer</li>
                            <li>Our Support is very dedicated for our customers</li>
                            <li>We provide 24x7 support with extended offer</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ What We Do & Who We Are End ================================== -->

    <!-- ============================ Advance features Start ================================== -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Our Advance & Extra Features</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-success text-success">
                            <i class="ti-layers-alt"></i>
                        </div>
                        <h4 class="small-features-caption">CPA Marketing</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-warning text-warning">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <h4 class="small-features-caption">Reputation Recover</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-danger text-danger">
                            <i class="ti-cloud-down"></i>
                        </div>
                        <h4 class="small-features-caption">Keyword Research</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-info text-info">
                            <i class="ti-write"></i>
                        </div>
                        <h4 class="small-features-caption">Local Search Strategy</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-danger text-danger">
                            <i class="ti-cloud-down"></i>
                        </div>
                        <h4 class="small-features-caption">Traffic Exchange</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-info text-info">
                            <i class="ti-write"></i>
                        </div>
                        <h4 class="small-features-caption">Cash Linking</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-success text-success">
                            <i class="ti-layers-alt"></i>
                        </div>
                        <h4 class="small-features-caption">SLA Management</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="small-features-box mb-4">
                        <div class="small-features-icon bg-light-warning text-warning">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <h4 class="small-features-caption">Enterprice Software</h4>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Advance Features End ================================== -->

    <!-- ============================ Testimonial Start ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>What People Saying?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="owl-carousel" id="testimonials-two">

                    <!-- Single Testimonials -->
                    <div class="item">
                        <div class="testimonial-wrap style-2">
                            <div class="client-thumb-box">
                                <div class="client-thumb-content">
                                    <div class="client-thumb">
                                        <img src="https://via.placeholder.com/400x400" class="img-responsive img-circle" alt="">
                                    </div>
                                    <h5 class="mb-0">Adam Gillworm</h5>
                                    <span>Envato Market</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>

                        </div>
                    </div>

                    <!-- Single Testimonials -->
                    <div class="item">
                        <div class="testimonial-wrap style-2">
                            <div class="client-thumb-box">
                                <div class="client-thumb-content">
                                    <div class="client-thumb">
                                        <img src="https://via.placeholder.com/400x400" class="img-responsive img-circle" alt="">
                                    </div>
                                    <h5 class="mb-0">Jully Jiliven</h5>
                                    <span>Envato Manager</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>

                        </div>
                    </div>

                    <!-- Single Testimonials -->
                    <div class="item">
                        <div class="testimonial-wrap style-2">
                            <div class="client-thumb-box">
                                <div class="client-thumb-content">
                                    <div class="client-thumb">
                                        <img src="https://via.placeholder.com/400x400" class="img-responsive img-circle" alt="">
                                    </div>
                                    <h5 class="mb-0">Gill Wormdom</h5>
                                    <span>SEO Mind LTD CEO</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>

                        </div>
                    </div>

                    <!-- Single Testimonials -->
                    <div class="item">
                        <div class="testimonial-wrap style-2">
                            <div class="client-thumb-box">
                                <div class="client-thumb-content">
                                    <div class="client-thumb">
                                        <img src="https://via.placeholder.com/400x400" class="img-responsive img-circle" alt="">
                                    </div>
                                    <h5 class="mb-0">Adam Gillworm</h5>
                                    <span>Envato Market</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>

                        </div>
                    </div>

                    <!-- Single Testimonials -->
                    <div class="item">
                        <div class="testimonial-wrap style-2">
                            <div class="client-thumb-box">
                                <div class="client-thumb-content">
                                    <div class="client-thumb">
                                        <img src="https://via.placeholder.com/400x400" class="img-responsive img-circle" alt="">
                                    </div>
                                    <h5 class="mb-0">Jully Jiliven</h5>
                                    <span>Envato Manager</span>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Testimonial End ================================== -->

    <!-- ============================ Our Prices Start ================================== -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Our Best Pricing Plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center m-0">
                <div class="col-lg-4 col-md-4 pd-0 pr-left">
                    <div class="pr-table-box mb-4">
                        <div class="pr-pricing-price-container">
                            <span class="pr-currency">$</span>
                            <span class="pr-price-value">49</span>
                        </div>
                        <h4 class="pr-price-time text-warning">Monthly Package</h4>
                        <div class="pr-pricing-container">Startup Package</div>
                        <div class="pr-pricing-list-container">
                            <ul class="pr-pricing-list">
                                <li>Business &amp; Finance Analysing</li>
                                <li>SEO Optimization</li>
                                <li>Managment &amp; Marketing</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                        </div>
                        <div class="pr-button-wrap">
                            <a class="btn price-btn btn-warning-light" target="_blank" href="#">Sign up</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="pr-table-box featured mb-4">
                        <div class="pr-pricing-price-container">
                            <span class="pr-currency">$</span>
                            <span class="pr-price-value">99</span>
                        </div>
                        <h4 class="pr-price-time text-primary">Monthly Package</h4>
                        <div class="pr-pricing-container">Business Package</div>
                        <div class="pr-pricing-list-container">
                            <ul class="pr-pricing-list">
                                <li>Business &amp; Finance Analysing</li>
                                <li>SEO Optimization</li>
                                <li>Managment &amp; Marketing</li>
                                <li>24/7 Customer Support</li>
                                <li>SEO Optimization</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                        </div>
                        <div class="pr-button-wrap">
                            <a class="btn price-btn btn-primary" target="_blank" href="#">Sign up</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 pd-0 pr-right">
                    <div class="pr-table-box mb-4">
                        <div class="pr-pricing-price-container">
                            <span class="pr-currency">$</span>
                            <span class="pr-price-value">149</span>
                        </div>
                        <h4 class="pr-price-time text-success">Monthly Package</h4>
                        <div class="pr-pricing-container">Ultimate Package</div>
                        <div class="pr-pricing-list-container">
                            <ul class="pr-pricing-list">
                                <li>Business &amp; Finance Analysing</li>
                                <li>SEO Optimization</li>
                                <li>Managment &amp; Marketing</li>
                                <li>24/7 Customer Support</li>
                            </ul>
                        </div>
                        <div class="pr-button-wrap">
                            <a class="btn price-btn btn-success-light" target="_blank" href="#">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Our Prices End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="p-0 overlay-bottom">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="box-shadow border--radius bg-white p5-4 pb-5 text-center">
                        <div class="mb-3">
                            <h1>Get started instantly!</h1>
                            <p class="mb-4">For startups and growing businesses check Unico plan and package.</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started Now</a>
                        <a href="#" class="btn btn-success btn-rounded btn-lg ml-2">Register Today</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="bg-cover skin-dark-footer" style="background:#072544 url(assets/img/footer.png) no-repeat">
        <div class="ht-80"></div>
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Our Services</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Business & Corporate</a></li>
                                <li><a href="#">Landing Page</a></li>
                                <li><a href="#">Hire & Dedicate</a></li>
                                <li><a href="#">Software & App</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Useful links</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Business & Corporate</a></li>
                                <li><a href="#">Landing Page</a></li>
                                <li><a href="#">Hire & Dedicate</a></li>
                                <li><a href="#">Software & App</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Get in Touch</h4>
                            <p>7744 North Park Place<br>
                                San Francisco, CA 714258</p>
                            <p>support@Unico77.com</p>
                            <p>777-444-2222</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Follow Us</h4>
                            <ul class="footer-bottom-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>

                            <form class="signup-frm mt-4">
                                <input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
                                <button type="submit" class="btn btn-primary"><i class="ti-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2019 Unico. Designd By <a href="https://Themezhub.com">Themezhub</a> All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Modal -->
    <div class="modal fade" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="registermodal">
                <div class="modal-header theme-header" style="background:url(assets/img/modal-bg.png);">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Number">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <select class="form-control">
                                    <option>Your Budget</option>
                                    <option>$5,000 - $10,000</option>
                                    <option>$10,000 - $15,000</option>
                                    <option>$15,000 - $20,000</option>
                                    <option>$20,000 - $50,000</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <textarea class="form-control" placeholder="Comment"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <ul class="no-ul-list mb-2">
                                    <li>
                                        <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
                                        <label for="checkbox-1" class="checkbox-custom-label"><a href="#">Agree terms & Conditions</a></label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button type="button" class="btn btn-primary">Send Rquest</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('shop/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('shop/assets/js/popper.min.js')}}"></script>
<script src="{{asset('shop/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('shop/assets/js/aos.js')}}"></script>
<script src="{{asset('shop/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('shop/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('shop/assets/js/jquery-rating.js')}}"></script>
<script src="{{asset('shop/assets/js/slick.js')}}"></script>
<script src="{{asset('shop/assets/js/slider-bg.js')}}"></script>
<script src="{{asset('shop/assets/js/lightbox.js')}}"></script>
<script src="{{asset('shop/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('shop/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('shop/assets/js/custom.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
    $(document).ready(function(){
        $('.ct-slick-homepage').slick({
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>


</body>
</html>































