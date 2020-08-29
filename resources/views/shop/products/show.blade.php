@extends('layout.shop_layout')
@section('content')
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel">
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{asset('/'.$product->url_imagen_principal)}}" alt="">
                        </div>
                        <!-- <div class="single-prd-item">
                            <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                        </div>
                        <div class="single-prd-item">
                            <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{$product->nombre}}</h3>
                        <h2>${{number_format($product->precio_venta,2,'.',',')}} </h2>
                        <ul class="list">
                            <li><a class="" href="#">Categoria {{$product->category->nombre}}</a></li>
                            <li><a class="" href="#">Marca {{$product->brand->nombre}}</a></li>
                            <li><span class="badge @if($product->existencia > 0) badge-primary @else badge-danger @endif">{{$available}}</span></li>
                        </ul>
                        <p>
                            {{$product->descripcion}}
                        </p>
                        <div class="product_count">
                            <label for="qty">Cantidad:</label>
                            <input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">

                            <a class="btn  btn-primary" href="#">Agregar al carrito</a>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <a class="btn  btn-primary mr-2" href="#">Descargar ficha tecnica</a>
                            <a class="btn  btn-success ml-2" href="#">Agregar a lista de deseos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                       aria-selected="false">Caracteristicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                       aria-selected="false">Especificaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                       aria-selected="false">Usos</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        {{$product->descripcion}}
                    </p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p>
                        {{$product->caracteristicas}}
                    </p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                   <p>
                       {{$product->especificaciones}}
                   </p>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <p>
                        {{$product->uso}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->

    <!--================ Start related Product area =================-->
    <section class="related-product-area section-margin--small mt-0">
        <div class="container">
            <div class="section-intro pb-60px">
                <p></p>
                <h2>Productos <span class="section-intro__style">Similares</span></h2>
            </div>
            <div class="row mt-30">

                @foreach($products as $product)

                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="{{asset('/'.$product->url_imagen_principal)}}" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">{{$product->nombre}}</a>
                                    <div class="price">${{number_format($product->precio_venta,2,'.',',')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!--================ end related Product area =================-->
@stop
