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
                        <span style="margin-top:25px !important;">MyDibu Medical</span>
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li class="active"><a href="{{asset('/')}}">Inicio</a>
                        </li>

                        <li><a href="#">Tienda</a></li>

                        <li><a href="#">Categorias</a></li>

                        <li>
                            <a href="#">Modelos</a>
                        </li>

                        <li>
                            <a href="#">Nosotros</a>
                        </li>

                        <li>
                            <a href="#">Miembro PYME</a>
                            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                <li>
                                    <a href="{{asset('/member-pymes')}}">Acerca de</a>
                                </li>
                                <li>
                                    <a href="#">Registrate</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        @guest
                            <li class="add-listing theme-bg">
                                <a href="#" href="#" data-toggle="modal" data-target="#getstarted">Acceso</a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="#"> <i class="fa fa-user-md"></i> {{Auth::user()->nombre}}</a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li>
                                        <a href="{{asset('/account')}}">Mi cuenta</a>
                                    </li>
                                    <li>
                                        <a href="#">Ordenes</a>
                                    </li>
                                    @if(Auth::user()->userIsAdmin())
                                        <li>
                                            <a href="{{asset('administracion/productos')}}">Administración</a>
                                        </li>
                                    @endif
                                    <li>
                                        <form action="{{asset('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn text-dark btn-lg btn-sm btn-default">Salir</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->


    @yield('content')

    <section class="p-0 overlay-bottom">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="box-shadow border--radius bg-white p5-4 pt-2 pb-5 text-center">
                        <div class="mb-3 pt-2">
                            <h1>Se parte de MyDibu Medical</h1>
                            <p class="mb-4">For startups and growing businesses check Unico plan and package.</p>
                        </div>
                        <a href="#" class="btn btn-info">Registrate</a>
                        <a href="#" class="btn btn-outline-info ml-2">Se un miembro PYMES</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <footer class="bg-cover skin-dark-footer" style="background:#072544 url({{asset('shop/assets/img/footer.png')}}) no-repeat">
        <div class="ht-80"></div>
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">MyDibu Medical</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Vision</a></li>
                                <li><a href="#">Misión</a></li>
                                <li><a href="#">Miembro PYMES</a></li>
                                <li><a href="#">Contacto</a></li>
                                <li><a href="#">Acceder</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Links rapidos</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Tienda</a></li>
                                <li><a href="#">Categorias</a></li>
                                <li><a href="#">Marcas</a></li>
                                <li><a href="#">Mi cuenta</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Contactanos</h4>
                            <p>Venta y asesoría de artículos de seguridad medico hospitalaria y personal</p>
                            <p>Ventas y asesoría:  55 6011 1766</p>
                            <p>Correo:  mydibumedical@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Siguenos</h4>
                            <ul class="footer-bottom-social">
                                <li><a href="https://www.facebook.com/MyDibu-Medical-116978430130886" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/mydibu.medical/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>

                            <form class="signup-frm mt-4">
                                <input type="email" class="form-control sigmup-me" placeholder="Tu correo electronico" required="required">
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
                        <p class="mb-0">© 2020 Todos los derechos reservados | <a href="#">MyDibu Medical</a> </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="registermodal">
                <div class="modal-header theme-header" style="background:url({{asset('shop/assets/img/modal-bg.png')}});">
                    <h5 class="modal-title text- text-uppercase" id="exampleModalLongTitle">Acceder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{asset('login')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-12">
                                <input type="email" class="form-control" name="email" placeholder="Dirección de correo">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>

                            <div class="form-group col-md-12 col-sm-12">

                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-info">Acceder</button> ó
                                <a href="" class="btn btn-outline-info">Registrate</a>
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































