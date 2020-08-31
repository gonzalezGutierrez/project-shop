<!DOCTYPE html>
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
                        <li class="nav-item"><a class="nav-link" href="#">Miembre PYME</a></li>
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
                                <a class="button button-header" href="{{asset('/profile')}}">
                                    <i class="ti-user"></i>
                                    {{Auth::user()->nombre}}
                                </a>
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

</html>
