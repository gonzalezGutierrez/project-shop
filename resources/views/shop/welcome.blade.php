@extends('layout.shop_layout')
@section('content')
    <section class="container-fluid bg-secondary px-0">
        <div class="row no-gutters align-items-center">
            <div class="col-md-6">
                <div class="mx-auto bg-light my-sm-4" style="max-width: 37rem;">
                    <div class="owl-carousel trigger-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoHeight&quot;: true }" data-target-carousel="#target-carousel">
                        <div class="py-5 px-3 px-sm-5"><img class="d-block mb-2" src="{{asset('shop/img/home/apparel/hero-slide-logo01.png')}}" width="180" alt="Reebok">
                            <h2 class="mb-1">Sneakers Classic Collection</h2>
                            <h3 class="font-weight-light opacity-70 pb-3">starting at $105.99</h3><a class="btn btn-primary" href="shop-style1-ls.html">Shop now<i class="ml-2" data-feather="arrow-right"></i></a>
                        </div>
                        <div class="py-5 px-3 px-sm-5"><img class="d-block mb-2" src="{{asset('shop/img/home/apparel/hero-slide-logo02.png')}}" width="129" alt="The North Face">
                            <h2 class="mb-1">Sports Hoodie Collection</h2>
                            <h3 class="font-weight-light opacity-70 pb-3">starting at $89.00</h3><a class="btn btn-primary" href="shop-style1-ls.html">Shop now<i class="ml-2" data-feather="arrow-right"></i></a>
                        </div>
                        <div class="py-5 px-3 px-sm-5"><img class="d-block mb-2" src="{{asset('shop/img/home/apparel/hero-slide-logo03.png')}}" width="182" alt="Calvin Klein">
                            <h2 class="mb-1">Sunglasses Collection</h2>
                            <h3 class="font-weight-light opacity-70 pb-3">starting at $16.99</h3><a class="btn btn-primary" href="shop-style1-ls.html">Shop now<i class="ml-2" data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="owl-carousel" id="target-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;mouseDrag&quot;: false, &quot;touchDrag&quot;: false, &quot;pullDrag&quot;: false, &quot;animateOut&quot;: &quot;fadeOut&quot; }"><img class="ml-auto mr-0" src="{{asset('shop/img/home/apparel/hero-slide01.jpg')}}" alt="Sneakers Collection"><img class="ml-auto mr-0" src="{{asset('shop/img/home/apparel/hero-slide02.jpg')}}" alt="Hoodie Collection"><img class="ml-auto mr-0" src="{{asset('shop/img/home/apparel/hero-slide03.jpg')}}" alt="Sunglasses Collection"></div>
            </div>
        </div>
    </section>
    <!-- Popular categories (carousel)-->
    <section class="container py-5 mt-3">
        <h2 class="h3 text-center pb-4">Categorias Populares</h2>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;460&quot;:{&quot;items&quot;:2}, &quot;768&quot;:{&quot;items&quot;:3}} }">
            <div class="card border-0"><a class="card-img-tiles" href="shop-style1-ls.html">
                    <div class="main-img"><img src="{{asset('shop/img/shop/apparel/categories/01.jpg')}}" alt="Clothing"></div>
                    <div class="thumblist"><img src="{{asset('shop/img/shop/apparel/categories/02.jpg')}}" alt="Clothing"><img src="{{asset('shop/img/shop/apparel/categories/03.jpg')}}" alt="Clothing"></div></a>
                <div class="card-body border mt-n1 py-4 text-center">
                    <h2 class="h5 mb-1">Clothing</h2><span class="d-block mb-3 font-size-xs text-muted">Starting from <span class='font-weight-semibold'>$49.99</span></span><a class="btn btn-pill btn-outline-primary btn-sm" href="shop-style1-ls.html">Shop clothing</a>
                </div>
            </div>
            <div class="card border-0">
                <a class="card-img-tiles" href="shop-style1-ls.html">
                    <div class="main-img"><img src="{{asset('shop/img/shop/apparel/categories/04.jpg')}}" alt="Shoes"></div>
                    <div class="thumblist">
                        <img src="{{asset('shop/img/shop/apparel/categories/05.jpg')}}" alt="Shoes">
                        <img src="{{asset('shop/img/shop/apparel/categories/06.jpg')}}" alt="Shoes">
                    </div>
                </a>
                <div class="card-body border mt-n1 py-4 text-center">
                    <h2 class="h5 mb-1">Shoes</h2><span class="d-block mb-3 font-size-xs text-muted">Starting from <span class='font-weight-semibold'>$56.00</span></span><a class="btn btn-pill btn-outline-primary btn-sm" href="shop-style1-ls.html">Shop shoes</a>
                </div>
            </div>
            <div class="card border-0">
                <a class="card-img-tiles" href="shop-style1-ls.html">
                    <div class="main-img">
                        <img src="{{asset('shop/img/shop/apparel/categories/07.jpg')}}" alt="Bags">
                    </div>
                    <div class="thumblist">
                        <img src="{{asset('shop/img/shop/apparel/categories/08.jpg')}}" alt="Bags">
                        <img src="{{asset('shop/img/shop/apparel/categories/09.jpg')}}" alt="Bags">
                    </div>
                </a>
                <div class="card-body border mt-n1 py-4 text-center">
                    <h2 class="h5 mb-1">Bags</h2><span class="d-block mb-3 font-size-xs text-muted">Starting from <span class='font-weight-semibold'>$27.00</span></span><a class="btn btn-pill btn-outline-primary btn-sm" href="shop-style1-ls.html">Shop bags</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured products grid-->
    <section class="container pt-3 pb-4">
        <h2 class="h3 text-center pb-4">Ultimos productos agragados</h2>
        <div class="row">
            @foreach($productsLastes as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card mb-4">
                        <div class="product-thumb">
                            <a class="product-thumb-link" href="shop-single-apparel.html"></a>
                            <span class="product-wishlist-btn" data-toggle="tooltip" data-placement="left" title="Añadir a tu lista de deseos"><i data-feather="heart"></i></span>
                            <img src="{{asset('/'.$product->url_imagen_principal)}}" alt="Product">
                        </div>
                        <div class="product-card-body text-center"><a class="product-meta" href="#">{{$product->category->nombre}}</a>
                            <h3 class="product-card-title"><a href="shop-single-apparel.html">{{$product->nombre}}</a></h3><span class="text-primary">${{number_format($product->precio_venta,2,'.',',')}}</span>
                        </div>
                        <div class="product-card-body body-hidden">
                            <button class="btn btn-primary btn-sm btn-block" type="button" data-toggle="toast" data-target="#cart-toast">Agregar al carrito</button><a class="quick-view-btn" href="#quick-view-{{$product->id}}" data-toggle="modal"><i class="mr-1" data-feather="eye"></i>Previsualización</a>
                        </div>
                    </div>
                </div>
                <!--MODAL CON EL DETALLE DEL PRODUCTO-->
                @include('shop.modals.product-preview')
            @endforeach
        </div>
    </section>
    <!-- Product widgets-->
    <section class="container pt-sm-3 pb-4 pb-md-5">
        <div class="row">
            <div class="col-md-4 col-sm-6 d-block d-sm-none d-md-block mb-3">
                <!-- Promo banner--><a class="d-block text-decoration-0 mx-auto" href="#" style="max-width: 24rem;">
                    <div class="bg-secondary">
                        <div class="px-3 pt-4 text-center">
                            <h4 class="font-size-sm font-weight-normal pt-1 mb-2">2019 Spring / Summer</h4>
                            <h4 class="h5 pb-2">Hoodie Collection</h4>
                            <div class="btn btn-primary btn-sm">Shop now</div>
                        </div><img src="{{asset('shop/img/shop/banner01.jpg')}}" alt="Promo banner">
                    </div></a>
            </div>
            <div class="col-md-4 col-sm-6 mb-2 py-3">
                <div class="widget widget-featured-entries">
                    <h3 class="widget-title font-size-lg">Productos mas comprados</h3>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="{{asset('img/shop/widget/01.jpg')}}" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Keds - Kickstart Pom Pom</a></h6>
                            <p class="featured-entry-meta">$42.99</p>
                        </div>
                    </div>
                    <h3 class="widget-title font-size-lg">Productos mas comprados</h3>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="{{asset('img/shop/widget/01.jpg')}}" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Keds - Kickstart Pom Pom</a></h6>
                            <p class="featured-entry-meta">$42.99</p>
                        </div>
                    </div>
                    <h3 class="widget-title font-size-lg">Productos mas comprados</h3>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="{{asset('img/shop/widget/01.jpg')}}" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Keds - Kickstart Pom Pom</a></h6>
                            <p class="featured-entry-meta">$42.99</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-2 py-3">
                <div class="widget widget-featured-entries">
                    <h3 class="widget-title font-size-lg">Nuevas marcas</h3>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="img/shop/widget/08.jpg" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">The North Face Hoodie</a></h6>
                            <p class="featured-entry-meta">$134.00</p>
                        </div>
                    </div>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="img/shop/widget/09.jpg" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Medicine Chameleon Sunglasses</a></h6>
                            <p class="featured-entry-meta">$47.00</p>
                        </div>
                    </div>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="img/shop/widget/10.jpg" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Adidas Performance Hat</a></h6>
                            <p class="featured-entry-meta">$19.00</p>
                        </div>
                    </div>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="img/shop/widget/07.jpg" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Calvin Klein Jeans Keds</a></h6>
                            <p class="featured-entry-meta">$125.00</p>
                        </div>
                    </div>
                    <div class="media"><a class="featured-entry-thumb" href="#"><img src="img/shop/widget/12.jpg" width="64" alt="Product thumb"></a>
                        <div class="media-body">
                            <h6 class="featured-entry-title"><a href="#">Roxy Cotton Handbag</a></h6>
                            <p class="featured-entry-meta">$52.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog + Insta split section-->
    <section class="container-fluid px-0 border-bottom">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 px-4" style="background-color: #efefef;">
                <div class="mx-auto py-3" style="max-width: 25rem;">
                    <h2 class="mb-1">Síguenos en facebook</h2> <br>
                    <a class="btn btn-outline-dark" href="blog-ls.html"><i class="mr-2" data-feather="facebook"></i> Seguir</a>
                </div>
            </div>
            <div class="col-md-6 bg-secondary py-5 px-4">
                <div class="mx-auto py-3" style="max-width: 25rem;">
                    <h2 class="mb-1">Síguenos en Instagram</h2> <br>
                    <a class="btn btn-dark" href="#"><i class="mr-2" data-feather="instagram"></i> Seguir</a>
                </div>
            </div>
        </div>
    </section>
@stop
