@extends('layout.shop_layout')
@section('title','Mi carrito')
@section('content')
    <section>
        <div class="container">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="box box-body padd-0">
                        <div class="panel">
                            <div class="panel-heading bg-light-success text-success p-15">
                                Tu carrito ({{$productsCount}} producto{{$productsCount > 1 ? 's' : ''}})
                            </div>
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
                                                        <input type="number" class="form-control b-all" value="{{$product->amount}}">
                                                    </td>
                                                    <td>${{number_format($product->subtotal,2,'.',',')}}</td>
                                                    <td>
                                                        <form action="{{asset('product_in_shopping_cart/'.$product->product_id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-danger text-white"><i class="ti-trash text-white"></i></button>
                                                        </form>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <hr>
                                        <button class="btn btn-success pull-right woo-btn">Actualizar carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="booking-price">
                        <form>
                            <h4 class="mb-3">Detalle de la orden</h4>
                            <span class="text-danger">En compras menores a $2000.00 MXN el envio es gratuito</span>

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
                            <button class="btn btn-primary btn-lg woo-btn">Proceder a pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
