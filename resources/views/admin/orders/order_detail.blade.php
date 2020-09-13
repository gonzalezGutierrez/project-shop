<!--PRODUCTOS DE LA ORDEN-->
<div class="modal fade bd-example-modal-lg-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h4>Total: ${{number_format($order->total,2,'.',',')}}</h4>
                <span class="text-uppercase label @if($order->estatus == 'pagada') label-success @endif">{{$order->estatus}}</span>
            </div>
            <div class="modal-body">
                @if($order->factura)
                    <div class="alert alert-success">El cliente necesita factura</div>
                @else
                    <div class="alert alert-info">EL cliente no necesita factura</div>
                @endif

                <div class="row">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-5">
                                        <div class="col-md-12 text-left">
                                            <span class="text-bold text-uppercase">Codigo de restreo de orden</span>
                                        </div>
                                        <div class="col-md-12 text-left">
                                            <span class=" text-uppercase">{{$order->transaction->transaccion_codigo}}</span>
                                            <br>
                                            <span>Fecha de orden: {{$order->created_at}}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-5">
                                        <div class="col-md-12 text-left">
                                            <span class="text-bold text-uppercase">Dirección de envio</span>
                                        </div>
                                        <div class="col-md-12 text-left">
                                            <p>
                                                Calle {{$order->shoppingCart->ubication->ubication->calle}}
                                                N° {{$order->shoppingCart->ubication->ubication->n_exterior}}
                                                y N° Interior {{$order->shoppingCart->ubication->ubication->n_interior}}
                                                Colonia {{$order->shoppingCart->ubication->ubication->colonia}}
                                                {{$order->shoppingCart->ubication->ubication->municipio}} ,
                                                {{$order->shoppingCart->ubication->ubication->estado}} ,
                                                {{$order->shoppingCart->ubication->ubication->codigo_postal}}
                                                <br>
                                                <strong>Rerefencias: </strong>  {{$order->shoppingCart->ubication->ubication->referencias}}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase">Cliente</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="text-bold text-uppercase">{{$order->shoppingCart->customer->nombre}} {{$order->shoppingCart->customer->apellido}}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase">Forma de pago</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="text-bold text-uppercase">{{$order->transaction->paymentMethod->nombre}}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-5">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase">Producto</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="text-bold text-uppercase">total</span>
                                        </div>
                                    </div>
                                    @foreach($order->shoppingCart->products as $product)
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <span>{{$product->product_name}} ({{$product->amount}})</span>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span>${{number_format($product->subtotal,2)}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    <hr>
                                    <div class="row justify-content-md-between">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase font-bold">Subtotal</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="text-bold text-uppercase font-bold">${{number_format($order->shoppingCart->amount(),2,'.',',')}}</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-between">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase font-bold">Envio:</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                                                            <span class="text-bold text-uppercase font-bold">
                                                                                @if ($order->shoppingCart->amount()  < 2000)
                                                                                    $100.00
                                                                                @else
                                                                                    $0.00
                                                                                @endif
                                                                            </span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-between">
                                        <div class="col-md-6 text-left">
                                            <span class="text-bold text-uppercase font-bold">Total</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="text-bold text-uppercase font-bold">${{number_format($order->total,2,'.',',')}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

