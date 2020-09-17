@extends('layout.shop_layout')
@section('title','Mi carrito')
@section('content')
    <div class="container-fluid breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{asset('/')}}">
                        Inicio
                    </a>
                    <a href="javascript:void(0)">
                        <span>
                            <i class="ti-arrow-right"></i>
                        </span>
                        Mi carrito ({{$productsCount}})
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="alert alert-primary" style="border-radius: 0px;">
                    <span class="">En compras mayores a $2000.00 MXN el envio es gratuito</span>
                </div>
            </div>

            @if(Session::has('success'))
                <div class="col-md-12">
                    <div class="alert alert-primary" style="border-radius: 0px;">
                        <span class="">{{ Session::get('success') }}</span>
                    </div>
                </div>
            @endif

            @if(Session::has('danger'))
                <div class="col-md-12">
                    <div class="alert alert-danger" style="border-radius: 0px;">
                        <span class="">{{ Session::get('danger') }}</span>
                    </div>
                </div>
            @endif

            <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                @if($productsCount == 0)
                    <div class="card">
                        <div class="card-body p-40 text-center">
                            <h5>Tu carrito está vacío</h5>
                            <a href="{{asset('shop-general')}}" class="btn btn-info btn-sm">Ver productos</a>
                        </div>
                    </div>
                @else
                    <h3 class="small-sec-title mt-3">Tu carrito</h3>
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table product-overview">
                                <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">Prod</th>
                                    <th class="text-center">$</th>
                                    <th class="text-center">Cant</th>
                                    <th class="text-center" style="text-align:center">Sub</th>
                                    <th class="text-center" style="text-align:center"><i class="fa fa-cog"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{asset('products/'.$product->product_slug)}}">
                                                <img src="{{asset('/'.$product->product_image)}}" alt="{{$product->product_name}}" width="80">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <h5 class="font-500">{{$product->product_name}}</h5>
                                        </td>
                                        <td class="text-center">${{number_format($product->product_price,2,'.',',')}}</td>
                                        <td class="text-center">
                                            <form action="{{asset('product_in_shopping_cart')}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{$product->product_id}}" name="producto_id">
                                                <input type="number" class="form-control b-all" min="1" max="{{$product->product_stock}}" name="cantidad" value="{{$product->amount}}">
                                            </form>

                                        </td>
                                        <td class="text-center">${{number_format($product->subtotal,2,'.',',')}}</td>
                                        <td class="text-center">
                                            <form action="{{asset('product_in_shopping_cart/'.$product->product_id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger text-white"><i class="ti-trash text-white"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <h3 class="small-sec-title mt-3">Detalle de la compra</h3>

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 justify-content-md-between">
                            <div class="col text-left">
                                <span class="font-bold">Subtotal</span>
                            </div>
                            <div class="col text-right">
                                <span class="font-bold">${{number_format($shopping_cart->amount(),2,'.',',')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-md-between">
                            <div class="col text-left">
                                <span class="font-bold">Envio: </span>
                            </div>
                            <div class="col text-right">
                                <span class="font-bold">${{number_format($shippingPrice,2,'.',',')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-md-between">
                            <div class="col text-left">
                                <span class="font-bold">Total: </span>
                            </div>
                            <div class="col text-right">
                                <span class="font-bold">${{number_format($total,2,'.',',')}}</span>
                            </div>
                        </div>
                        @guest()
                            <a href="{{asset('/login?checkout=true')}}" class="btn btn-sm btn-info">Inicia Sesión </a> Ó <a href="{{asset('/users/create')}}" class="btn btn-sm btn-outline-info">Registrate</a>
                            <br> para finalizar tu compra
                        @else
                            @if($productsCount != 0)
                                <a href="{{asset('/checkout')}}" class="btn btn-info">Continuar compra</a>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container mt-4 m-b-30">
        @if($productsCount == 0)
            <div class="card">
                <div class="card-body p-40 text-center">
                    <h5>Tu carrito está vacío</h5>
                    <a href="{{asset('shop-general')}}" class="btn btn-info btn-sm">Ver productos</a>
                </div>
            </div>
        @else
            <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="">
                <div class="panel">
                    <div class="panel-wrapper">
                        <div class="panel-body padd-15">
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th style="text-align:center">Subtotal</th>
                                        <th style="text-align:center">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td><img src="{{asset('/'.$product->product_image)}}" alt="{{$product->product_name}}" width="80"></td>
                                            <td>
                                                <h5 class="font-500">{{$product->product_name}}</h5>
                                            </td>
                                            <td>${{number_format($product->product_price,2,'.',',')}}</td>
                                            <td>
                                                <form action="{{asset('product_in_shopping_cart')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$product->product_id}}" name="producto_id">
                                                    <input type="number" class="form-control b-all" min="1" max="{{$product->product_stock}}" name="cantidad" value="{{$product->amount}}">
                                                </form>

                                            </td>
                                            <td>${{number_format($product->subtotal,2,'.',',')}}</td>
                                            <td>
                                                <form action="{{asset('product_in_shopping_cart/'.$product->product_id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger text-white"><i class="ti-trash text-white"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-price">
                <h4 class="mb-3">Detalle de la orden</h4>
                <span class="text-danger">En compras mayores a $2000.00 MXN el envio es gratuito</span>

                <!-- Your Stay -->
                <div class="booking-price-detail side-list">
                    <ul>
                        <li>Subtotal: <strong class="pull-right">${{number_format($shopping_cart->amount(),2,'.',',')}}</strong></li>
                        <li>
                                        <span>
                                            Envio:
                                        </span>
                            <strong class="pull-right">
                                ${{number_format($shippingPrice,2,'.',',')}}
                            </strong>
                        </li>
                    </ul>
                </div>

                <!-- Total Cost -->
                <div class="booking-price-detail side-list">
                    <ul>
                        <li>Total: <strong class="theme-cl pull-right">${{number_format($total,2,'.',',')}}</strong></li>
                    </ul>
                </div>
                @guest()
                    <a href="{{asset('/login?checkout=true')}}">Inicia Sesión </a> Ó <a href="{{asset('/register')}}">Registrate</a>  para finalizar tu compra
                @else
                    <a href="{{asset('/checkout')}}" class="btn btn-primary btn-lg woo-btn">Proceder a pagar</a>
                @endguest
            </div>
        </div>
            <div class="clearfix"></div>
        @endif
    </div>--}}
@stop
