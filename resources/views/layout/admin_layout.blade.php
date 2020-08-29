<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Administración | @yield('title')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    @include('layout.css-admin.css')


</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="{{asset('/')}}" class="logo  text-no-decoration text-bold ">
                <img src="https://cdn1.iconfinder.com/data/icons/shop-blue/64/pharmacy-512.png" height="35" alt="LOGO-MYDIBU" />
                MYDIBU | ADMIN
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Buscar producto...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>

            <span class="separator"></span>

            <ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-clock-o"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu large">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Ordenes
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="">
                                        <p class="clearfix mb-xs">
                                            <span class="message pull-left">Cliente: Jesús Gonzalez</span>
                                            <span class="message pull-right text-dark">$435.00</span>
                                        </p>
                                    </a>

                                </li>

                                <li>
                                    <a href="">
                                        <p class="clearfix mb-xs">
                                            <span class="message pull-left">Cliente: Jesús Gonzalez</span>
                                            <span class="message pull-right text-dark">$435.00</span>
                                        </p>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <p class="clearfix mb-xs">
                                            <span class="message pull-left">Cliente: Jesús Gonzalez</span>
                                            <span class="message pull-right text-dark">$435.00</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">0</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">0</span>
                            Proximos a terminarse
                        </div>

                        <div class="content">
                            <ul>
                                {{--@foreach($productsMin as $productMin)
                                <li>
                                    <a href="{{asset('administracion/productos/'.$productMin->id)}}" class="clearfix text-center">
                                        <figure class="image text-center">
                                            <img style="width: 30%; height: 30%; border-radius: 50%;" src="https://http2.mlstatic.com/cubre-bocas-n95-kn95-mascarilla-cubrebocas-con-filtro-D_NQ_NP_613380-MLM41183519384_032020-F.jpg" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">{{$productMin->nombre}}</span>
                                        <span class="message text-danger">Existencia: {{$productMin->existencia}}</span>
                                    </a>
                                </li>
                                @endforeach--}}
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="{{asset('administracion/productos-proximos-terminar')}}" class="view-more">Ver todo</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBotusTEkYaDlTR8Y6LPyZZml8mPDq2JZEjg&usqp=CAU" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">Jesús Gonzalez</span>
                        <span class="role">administrador</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="/"><i class="fa fa-user"></i> Mi perfil</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="/"><i class="fa fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">

        @include('layout.shared.sidebar')

        @yield('content')

    </div>

    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close visible-xs">
                    Ordenes<i class="fa fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                </div>
            </div>
        </div>
    </aside>
</section>


@include('layout.js-admin.js')

</body>
</html>
