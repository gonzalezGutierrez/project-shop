{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tienda | @yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="MStore - Modern Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#111" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#111">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('shop/css/vendor.min.css')}}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="{{asset('shop/css/theme.min.css')}}">
    <!-- Customizer styles and scripts-->
</head>
<!-- Body-->
<body>
<!-- Off-canvas search-->
<div class="offcanvas offcanvas-reverse" id="offcanvas-search">
    <div class="offcanvas-header d-flex justify-content-between align-items-center">
        <h3 class="offcanvas-title">Buscar en la tienda</h3>
        <button class="close" type="button" data-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body-inner">
            <div class="input-group pt-3">
                <div class="input-group-prepend"><span class="input-group-text" id="search-icon"><i data-feather="search"></i></span></div>
                <input class="form-control" type="text" id="site-search" placeholder="Buscar..." aria-label="Search site" aria-describedby="search-icon">
            </div><small class="form-text pt-1">Escribe el nombre del producto que deseas buscar.</small>
        </div>
    </div>
</div>
<!-- Off-canvas account-->
<div class="offcanvas offcanvas-reverse" id="offcanvas-account">
    <div class="offcanvas-header d-flex justify-content-between align-items-center">
        <h3 class="offcanvas-title">Acceder / Registrate</h3>
        <button class="close" type="button" data-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body-inner">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#signin" data-toggle="tab" role="tab"><i data-feather="log-in"></i>&nbsp;Acceso</a></li>
                <li class="nav-item"><a class="nav-link" href="#signup" data-toggle="tab" role="tab"><i data-feather="user"></i>&nbsp;Registrate</a></li>
            </ul>
            <div class="tab-content pt-1">
                <div class="tab-pane fade show active" id="signin" role="tabpanel">
                    <form action="{{asset('login')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label class="sr-only" for="signin-email">Correo electronico</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="signin-email-icon"><i data-feather="mail"></i></span></div>
                                <input class="form-control" type="email" name="email" id="signin-email" placeholder="Correo electronico" aria-label="Email" aria-describedby="signin-email-icon" required>
                                <div class="invalid-feedback">El campo correo electronico no puede estar vacio.</div>
                                @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signin-password">Contraseña</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="signin-password-icon"><i data-feather="lock"></i></span></div>
                                <input class="form-control" type="password" name="password" id="signin-password" placeholder="Password" aria-label="Password" aria-describedby="signin-password-icon" required>
                                <div class="invalid-feedback">El campo contraseña no puede estar vacio.</div>
                                @error('password')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" type="checkbox" id="remember-me" checked>
                            <label class="custom-control-label" for="remember-me">Recordar sesión</label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Acceder</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="signup" role="tabpanel">
                    <form action="{{asset('auth/register')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label class="sr-only" for="signup-name">Nombre(s)</label>
                            <input class="form-control" type="text" name="nombre" id="signup-name" placeholder="Nombre(s)" aria-label="Full name" required>
                            <div class="invalid-feedback">Por favor ingresa tu nombre</div>
                            @error('nombre')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-name">Apellido paterno</label>
                            <input class="form-control" type="text" name="apellido_paterno" id="signup-name" placeholder="Apellido paterno" aria-label="Full name" required>
                            <div class="invalid-feedback">Por favor ingresa tu apellido paterno</div>
                            @error('apellido_paterno')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-name">Apellido materno</label>
                            <input class="form-control" name="apellido_materno" type="text" id="signup-name" placeholder="Apellido materno" aria-label="Full name" required>
                            <div class="invalid-feedback">Por favor ingresa tu apellido materno</div>
                            @error('apellido_materno')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-email">Dirección de correo</label>
                            <input class="form-control" type="email" name="email" id="signup-email" placeholder="Dirección de correo" aria-label="Email address" required>
                            <div class="invalid-feedback">Por favor ingresa tu dirección de correo</div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-password">Contaseña</label>
                            <input class="form-control" type="password"  name="password" id="signup-password" placeholder="Contraseña" aria-label="Password" required>
                            <div class="invalid-feedback">Por favor ingresa tu contraseña</div>
                            @error('password')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="signup-password-confirm">Confirm password</label>
                            <input class="form-control" type="password" name="password_confirmation" id="signup-password-confirm" placeholder="Confirma tu contraseña" aria-label="Confirm password" required>
                            <div class="invalid-feedback">Por favor confirma tu contraseña</div>
                            @error('password_confirmation')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Registrate</button>
                    </form>
                </div>
            </div>
            <div class="d-flex align-items-center pt-5">
                <hr class="w-100">
                <div class="px-3 w-100 text-nowrap font-weight-semibold">O ingresa via</div>
                <hr class="w-100">
            </div>
            <div class="text-center pt-4"><a class="social-btn sb-facebook mx-2 mb-3" href="#" data-toggle="tooltip" title="Facebook"><i class="flaticon-facebook"></i></a><a class="social-btn sb-google mx-2 mb-3" href="#" data-toggle="tooltip" title="Google"><i class="flaticon-google-plus"></i></a><a class="social-btn sb-twitter mx-2 mb-3" href="#" data-toggle="tooltip" title="Twitter"><i class="flaticon-twitter"></i></a></div>
        </div>
    </div>
</div>
<!-- Off-canvas cart-->
<div class="offcanvas offcanvas-reverse" id="offcanvas-cart">
    <div class="offcanvas-header d-flex justify-content-between align-items-center">
        <h3 class="offcanvas-title">Tu carrito</h3>
        <button class="close" type="button" data-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body-inner">
            <div class="text-right"><a class="text-danger btn-sm pr-0" href="#"><i class="mr-1" data-feather="x" style="width: .85rem; height: .85rem;"></i>Vaciar carrito</a></div>
            <div class="widget widget-featured-entries pt-3">
                <div class="media">
                    <div class="featured-entry-thumb mr-3"><a href="#"><img src="{{asset('shop/img/shop/widget/07.jpg')}}" width="64" alt="Product thumb"></a><span class="item-remove-btn"><i data-feather="x"></i></span></div>
                    <div class="media-body">
                        <h6 class="featured-entry-title"><a href="#">Calvin Klein Jeans Keds</a></h6>
                        <p class="featured-entry-meta">1 <span class='text-muted'>x</span> $125.00</p>
                    </div>
                </div>
                <div class="media">
                    <div class="featured-entry-thumb mr-3"><a href="#"><img src="{{asset('shop/img/shop/widget/07.jpg')}}" width="64" alt="Product thumb"></a><span class="item-remove-btn"><i data-feather="x"></i></span></div>
                    <div class="media-body">
                        <h6 class="featured-entry-title"><a href="#">Calvin Klein Jeans Keds</a></h6>
                        <p class="featured-entry-meta">1 <span class='text-muted'>x</span> $125.00</p>
                    </div>
                </div>
                <div class="media">
                    <div class="featured-entry-thumb mr-3"><a href="#"><img src="{{asset('shop/img/shop/widget/07.jpg')}}" width="64" alt="Product thumb"></a><span class="item-remove-btn"><i data-feather="x"></i></span></div>
                    <div class="media-body">
                        <h6 class="featured-entry-title"><a href="#">Calvin Klein Jeans Keds</a></h6>
                        <p class="featured-entry-meta">1 <span class='text-muted'>x</span> $125.00</p>
                    </div>
                </div>
                <div class="media">
                    <div class="featured-entry-thumb mr-3"><a href="#"><img src="{{asset('shop/img/shop/widget/07.jpg')}}" width="64" alt="Product thumb"></a><span class="item-remove-btn"><i data-feather="x"></i></span></div>
                    <div class="media-body">
                        <h6 class="featured-entry-title"><a href="#">Calvin Klein Jeans Keds</a></h6>
                        <p class="featured-entry-meta">1 <span class='text-muted'>x</span> $125.00</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center py-3">
                    <div class="font-size-sm"> <span class="mr-2">Subtotal:</span><span class="font-weight-semibold text-dark">$325.00</span></div><a class="btn btn-outline-secondary btn-sm" href="cart.html">Expandir carrito<i class="mr-n2" data-feather="chevron-right"></i></a>
                </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.html"><i class="mr-1" data-feather="credit-card"></i>Pagar</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar Light-->
<header class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container-fluid navbar-inner">
        <!-- navbar brand--><a class="navbar-brand" style="min-width: 100px;" href="index.html"><img width="100" src="{{asset('shop/img/logo-dark.png')}}" alt="MStore"/></a>
        <!-- navbar collapse area-->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown mega-dropdown dropdown-more"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categories<i data-feather="more-horizontal"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <div class="dropdown-column">
                                <div class="bg-position-center bg-no-repeat bg-size-cover text-center px-3 py-4 mb-3" style="background-image: url(shop/img/megamenu/cat_bg02.jpg);">
                                    <h3 class="h5 text-white text-shadow my-3">Apparel</h3>
                                </div>
                                <div class="widget widget-links">
                                    <ul>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Clothing</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shoes</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Handbags &amp; Backpacks</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Hats &amp; Caps</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Sunglasses</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Watches</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Accessories</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <div class="bg-position-center bg-no-repeat bg-size-cover text-center px-3 py-4 mb-3" style="background-image: url(shop/img/megamenu/cat_bg01.jpg);">
                                    <h3 class="h5 text-white text-shadow my-3">Electronics</h3>
                                </div>
                                <div class="widget widget-links">
                                    <ul>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Computers &amp; Accessories</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">TV, Video &amp; Audio</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Smartphones &amp; Tablets</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Cameras, Photo &amp; Video</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Headphones</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Wearable Electronics</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Video Games</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <div class="bg-position-center bg-no-repeat bg-size-cover text-center px-3 py-4 mb-3" style="background-image: url(shop/img/megamenu/cat_bg03.jpg);">
                                    <h3 class="h5 text-white text-shadow my-3">Furniture &amp; Decor</h3>
                                </div>
                                <div class="widget widget-links">
                                    <ul>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Lounge Seating</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">File Cabinets</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Tables</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Indoor Lighting</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Office Chairs</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Adjustable Height Desks</span></a></li>
                                        <li><a href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Storage Units</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown active"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner"><a class="dropdown-column text-decoration-0" href="home-apparel.html"><img class="d-block img-thumbnail mb-2" src="{{asset('shop/img/megamenu/home-apparel.jpg')}}" alt="Home Apparel Shop">
                                <div class="text-center font-weight-semibold text-dark">Home Apparel Shop</div></a><a class="dropdown-column text-decoration-0" href="home-electronics.html"><img class="d-block img-thumbnail mb-2" src="{{asset('shop/img/megamenu/home-electronics.jpg')}}" alt="Home Electronics Store">
                                <div class="text-center font-weight-semibold text-dark">Home Electronics Store</div></a></div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <div class="dropdown-column">
                                <div class="widget widget-links">
                                    <h3 class="widget-title">Shop layouts</h3>
                                    <ul>
                                        <li><a href="shop-style1-ls.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 1 - Left Sidebar</span></a></li>
                                        <li><a href="shop-style1-rs.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 1 - Right Sidebar</span></a></li>
                                        <li><a href="shop-style1-ft.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 1 - Filters Top</span></a></li>
                                        <li><a href="shop-style2-ls.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 2 - Left Sidebar</span></a></li>
                                        <li><a href="shop-style2-rs.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 2 - Right Sidebar</span></a></li>
                                        <li><a href="shop-style2-ft.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Style 2 - Filters Top</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <div class="widget widget-links">
                                    <h3 class="widget-title">Shop pages</h3>
                                    <ul>
                                        <li><a href="shop-categories-apparel.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Categories - Apparel</span></a></li>
                                        <li><a href="shop-categories-electronics.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Shop Categories - Electronics</span></a></li>
                                        <li><a href="shop-single-apparel.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Product Page #1 - Apparel</span></a></li>
                                        <li><a href="shop-single-electronics.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Product Page #2 - Electronics</span></a></li>
                                        <li><a href="cart.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Cart</span></a></li>
                                        <li><a href="checkout-details.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Checkout - Details</span></a></li>
                                        <li><a href="checkout-shipping.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Checkout - Shipping</span></a></li>
                                        <li><a href="checkout-payment.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Checkout - Payment</span></a></li>
                                        <li><a href="checkout-review.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Checkout - Review</span></a></li>
                                        <li><a href="checkout-complete.html"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Checkout - Complete</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown-column"><a class="d-block mx-auto" href="#" style="max-width: 228px;"><img class="d-block" src="{{asset('shop/img/megamenu/promo-banner.jpg')}}" alt="Promo banner"></a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">User Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up Page</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about.html">About Us</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="product-comparison.html">Product Comparison</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="order-tracking.html">Order Tracking</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="404.html">404 Not Found</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Layout</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-rs.html">Blog Right Sidebar</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="blog-ls.html">Blog Left Sidebar</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="blog-ns.html">Blog No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Single Post Layout</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-single-rs.html">Post Right Sidebar</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="blog-single-ls.html">Post Left Sidebar</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="blog-single-ns.html">Post No Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="mr-1" data-feather="file-text"></i>Docs</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="docs/dev-setup.html">
                                <div class="d-flex py-1"><i class="mt-1 ml-n2" data-feather="file-text" style="width: 1.4375rem; height: 1.4375rem;"></i>
                                    <div class="ml-2"><span class="d-block mb-n1">Documentation</span><small class="text-muted">Kick-start customization</small></div>
                                </div></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="components/alerts.html">
                                <div class="d-flex py-1"><i class="mt-1 ml-n2" data-feather="grid" style="width: 1.375rem; height: 1.375rem;"></i>
                                    <div class="ml-2"><span class="d-block mb-n1">Components <span class='badge badge-pill badge-success'>40+</span></span><small class="text-muted">Faster page building</small></div>
                                </div></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="docs/changelog.html">
                                <div class="d-flex py-1"><i class="mt-1 ml-n2" data-feather="edit" style="width: 1.375rem; height: 1.375rem;"></i>
                                    <div class="ml-2"><span class="d-block mb-n1">Changelog <span class='badge badge-pill badge-warning'>v2.0</span></span><small class="text-muted">Regular updates</small></div>
                                </div></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                                <div class="d-flex py-1"><i class="mt-1 ml-n2" data-feather="life-buoy" style="width: 1.4375rem; height: 1.4375rem;"></i>
                                    <div class="ml-2"><span class="d-block mb-n1">Support</span><small class="text-muted">contact@createx.studio</small></div>
                                </div></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- navbar buttons-->
        <div class="navbar-btns">
            <div class="navbar-btns-inner">
                <div class="navbar-toggler navbar-btn collapsed" data-toggle="collapse" data-target="#menu">
                    <i class="mx-auto mb-1" data-feather="menu"></i>Menu
                </div>
                <a class="navbar-btn" href="#offcanvas-search" data-toggle="offcanvas">
                    <i class="mx-auto mb-1" data-feather="search"></i>Buscar
                </a>
                @guest()
                <a class="navbar-btn navbar-collapse-hidden" href="{{asset('/acceso')}}" data-toggle="offcanvas">
                    <i class="mx-auto mb-1" data-feather="log-in"></i>Acceso
                </a>
                @else
                    <a class="navbar-btn navbar-collapse-hidden" href="{{asset('profile')}}" data-toggle="offcanvas">
                        <i class="mx-auto mb-1" data-feather="user"></i>{{Auth::user()->nombre}}
                    </a>
                    @if(Auth::user()->rol->nombre == 'administrador')
                        <a class="navbar-btn" target="_blank" href="{{asset('/administracion/productos')}}" data-toggle="offcanvas">
                        <span class="d-block position-relative">
                            <i class="mx-auto mb-1" data-feather="lock"></i>
                            Admin
                        </span>
                        </a>
                    @endif
                @endif
                <a class="navbar-btn" href="#offcanvas-cart" data-toggle="offcanvas">
                    <span class="d-block position-relative">
                        <span class="navbar-btn-badge bg-primary text-light">4</span>
                        <i class="mx-auto mb-1" data-feather="shopping-cart"></i>
                        $325.00
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>

@yield('content')

<!-- Toast notifications-->
<div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to cart!</span>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item was added to your cart.</div>
    </div>
    <div class="toast mb-3" id="compare-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-info text-white"><i class="mr-2" data-feather="info" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to comparison!</span>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item was added to comparison table.</div>
    </div>
    <div class="toast mb-3" id="wishlist-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-info text-white"><i class="mr-2" data-feather="info" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to wishlist!</span>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item was added to your wishlist.</div>
    </div>
    <div class="toast mb-3" id="profile-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Updated!</span>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">Your profile info updated successfuly.</div>
    </div>
    <div class="toast mb-3" id="address-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Updated!</span>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">Your addresses info updated successfuly.</div>
    </div>
</div>
<!-- Footer-->
<footer class="page-footer bg-dark">
    <!-- first row-->
    <div class="pt-5 pb-0 pb-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget-links pb-4">
                        <h3 class="widget-title text-white border-light">Nuestras categorias</h3>
                        <ul>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Apparel &amp; Shoes</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Glasses &amp; Accessories</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Handbags &amp; Backpacks</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Computers &amp; Accessories</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Smartphones &amp; Tablets</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">TV, Video &amp; Audio</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Cameras, Photo &amp; Video</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Headphones</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Wearable Electronics</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Printers &amp; Ink</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Video Games</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Car Electronics</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Smart Home, IoT</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-links pb-4">
                        <h3 class="widget-title text-white border-light">Cuenta &amp; Información de entrega</h3>
                        <ul>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Tu cuenta</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Politicas</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Reembolsos &amp; Devoluciones</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Información de entrega</span></a></li>
                        </ul>
                    </div>
                    <div class="widget widget-links pb-4">
                        <h3 class="widget-title text-white border-light">Acerca de</h3>
                        <ul>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Acerca de la tienda</span></a></li>
                            <li><a class="nav-link-inline nav-link-light" href="#"><i class="widget-categories-indicator" data-feather="chevron-right"></i><span class="font-size-sm">Nuesta ubicación</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-5">
                    <div class="widget">
                        <!-- Subscription form (MailChimp)-->
                        <h3 class="widget-title text-white border-light">Stay informed</h3>
                        <form class="validate pb-4" action="https://studio.us12.list-manage.com/subscribe/post-json?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126&amp;c=?" method="get" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend"><span class="input-group-text" style="background-color: #e8e8e8;"><i data-feather="mail"></i></span></div>
                                <input class="form-control border-0 box-shadow-0 bg-secondary" type="email" name="EMAIL" id="mce-EMAIL" value="" placeholder="Your email" required>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe*</button>
                            <p class="font-size-xs text-white opacity-60 pt-2 mb-2" id="mc-helper">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
                            <!-- Subscription status-->
                            <div class="subscribe-status"></div>
                        </form>
                        <!-- Mobile app download-->
                        <div class="widget pb-4">
                            <h3 class="widget-title text-white border-light">Download our app</h3><a class="market-btn market-btn-light apple-btn mr-2 mb-2" href="#" role="button"><span class="market-button-subtitle">Download on the</span><span class="market-button-title">App Store</span></a><a class="market-btn market-btn-light google-btn" href="#" role="button"><span class="market-button-subtitle">Download on the</span><span class="market-button-title">Google Play</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop features-->
    <div class="pt-5 pb-0 pb-md-5 border-bottom border-light" id="shop-features" style="background-color: #1f1f1f;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 border-right border-light">
                    <div class="icon-box text-center mb-5 mb-md-0">
                        <div class="icon-box-icon"><i data-feather="truck"></i></div>
                        <h3 class="icon-box-title font-weight-semibold text-white">Free local delivery</h3>
                        <p class="icon-box-text">Free delivery for all orders over $100</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 border-right border-light">
                    <div class="icon-box text-center mb-5 mb-md-0">
                        <div class="icon-box-icon"><i data-feather="refresh-cw"></i></div>
                        <h3 class="icon-box-title font-weight-semibold text-white">Money back guarantee</h3>
                        <p class="icon-box-text">Free delivery for all orders over $100</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 border-right border-light">
                    <div class="icon-box text-center mb-5 mb-md-0">
                        <div class="icon-box-icon"><i data-feather="life-buoy"></i></div>
                        <h3 class="icon-box-title font-weight-semibold text-white">24/7 customer support</h3>
                        <p class="icon-box-text">Friendly 24/7 customer support</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box text-center mb-5 mb-md-0">
                        <div class="icon-box-icon"><i data-feather="credit-card"></i></div>
                        <h3 class="icon-box-title font-weight-semibold text-white">Secure online payment</h3>
                        <p class="icon-box-text">We posess SSL / Secure сertificate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- third row-->
    <div class="pt-5 pb-4" style="background-color: #1f1f1f;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center text-sm-left">
                    <div class="mb-4 mb-sm-0">
                        <a class="d-inline-block" href="index.html"><img width="100" src="{{asset('shop/img/logo-light.png')}}" alt="MStore"/></a>
                    </div>
                </div>
                <div class="col-sm-6 text-center text-sm-right"><a class="social-btn sb-facebook sb-light mx-1 mb-2" href="#"><i class="flaticon-facebook"></i></a><a class="social-btn sb-twitter sb-light mx-1 mb-2" href="#"><i class="flaticon-twitter"></i></a><a class="social-btn sb-instagram sb-light mx-1 mb-2" href="#"><i class="flaticon-instagram"></i></a><a class="social-btn sb-vimeo sb-light mx-1 mb-2" href="#"><i class="flaticon-vimeo"></i></a></div>
            </div>
            <div class="row pt-4">
                <div class="col-sm-6 text-center text-sm-left">
                    <ul class="list-inline font-size-sm">
                        <li class="list-inline-item mr-3"><a class="nav-link-inline nav-link-light" href="#">Outlets</a></li>
                        <li class="list-inline-item mr-3"><a class="nav-link-inline nav-link-light" href="#">Affiliates</a></li>
                        <li class="list-inline-item mr-3"><a class="nav-link-inline nav-link-light" href="#">Support</a></li>
                        <li class="list-inline-item mr-3"><a class="nav-link-inline nav-link-light" href="#">Privacy</a></li>
                        <li class="list-inline-item mr-3"><a class="nav-link-inline nav-link-light" href="#">Terms of use</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 text-center text-sm-right">
                    <div class="d-inline-block"><img width="187" src="{{asset('shop/img/cards.png')}}" alt="Payment methods"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3" style="background-color: #1a1a1a;">
        <div class="container font-size-xs text-center" aria-label="Copyright"><span class="text-white opacity-60 mr-1">© Todos los derechos reservados</span><a class="nav-link-inline nav-link-light" href="https://createx.studio/" target="_blank"></a></div>
    </div>
</footer>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="scroll-to-top-btn-icon" data-feather="chevron-up"></i></a>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{asset('shop/js/vendor.min.js')}}"></script>
<script src="{{asset('shop/js/theme.min.js')}}"></script>
</body>
</html>--}}
