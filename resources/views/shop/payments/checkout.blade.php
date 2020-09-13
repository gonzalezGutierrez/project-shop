@extends('layout.shop_layout')
@section('title','Pagar')
@section('content')
<div class="container">
    <form action="{{asset('payments/pay')}}" method="POST">
        @csrf
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="">Mis direcciones</h5>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            @foreach($ubications as $ubication)
                                <li class="list-group-item check d-flex align-items-center justify-content-between">
                                    <input type="checkbox" name="ubication_id" value="{{$ubication->id}}" id="checked-id-{{$ubication->id}}">
                                    <label for="" class="ml-3">
                                        Calle {{$ubication->calle}}
                                        N° {{$ubication->n_exterior}}
                                        y N° Interior {{$ubication->n_interior}}
                                        Colonia {{$ubication->colonia}}
                                        {{$ubication->municipio}} ,
                                        {{$ubication->estado}} ,
                                        {{$ubication->codigo_postal}}
                                        <br>
                                        <strong>Rerefencias: </strong>  {{$ubication->referencias}}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info btn-sm">Seleccionar dirección y pagar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{asset('payments/pay')}}" method="POST">
    <div class="row mb-5 mt-2">
        @csrf
        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
            <h3 class="small-sec-title mt-3">DIRECCIÓN DE ENVIO</h3>
            <a href="" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-sm btn-primary">Ver mis direcciones</a> <br><br>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Codigo postal</label>
                                <input type="text" class="form-control " name="codigo_postal" value="{{old('codigo_postal')}}" id="" placeholder="">
                                @error('codigo_postal')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" class="form-control" value="{{old('estado')}}" name="estado" id="" placeholder="">
                                @error('estado')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Delegación / Municipio</label>
                                <input type="text" class="form-control " name="municipio" value="{{old('municipio')}}" id="" placeholder="">
                                @error('municipio')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Colonia / Asentamiento</label>
                                <input type="text" class="form-control " value="{{old('colonia')}}" name="colonia" id="" placeholder="">
                                @error('colonia')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Calle</label>
                                <input type="text" class="form-control " value="{{old('calle')}}" name="calle" id="" placeholder="">
                                @error('calle')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">N° Exterior</label>
                                <input type="text" class="form-control " value="{{old('n_exterior')}}" name="n_exterior" id="" placeholder="">
                                @error('n_exterior')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">N° Interior / Depto (opcional)</label>
                                <input type="text" class="form-control " value="{{old('n_interior')}}"  name="n_interior" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Inidicaciones adicionales para entregar tus compras en esta</label>
                                <textarea  class="form-control" name="referencias" id="" cols="30" rows="10">{{old('referencias')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h3 class="small-sec-title mt-3">TU ORDEN</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 justify-content-md-between">
                        <div class="col text-left">
                            <span class="font-bold">Producto</span>
                        </div>
                        <div class="col text-right">
                            <span class="font-bold">Subtotal</span>
                        </div>
                    </div>
                    @foreach($products as $product)
                        <div class="row mb-3 justify-content-md-between">
                            <div class="col-md-8  text-left">
                                <span>{{$product->product_name}}({{$product->amount}})</span>
                            </div>
                            <div class="col text-right">
                                <span>${{number_format($product->subtotal,2,'.',',')}}</span>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                    <div class="row mb-3 justify-content-md-between">
                        <div class="col text-left">
                            <span class="">Subtotal: </span>
                        </div>
                        <div class="col text-right">
                            <span class="font-bold">${{number_format($shoppingCart->amount(),2,'.',',')}}</span>
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-md-between">
                        <div class="col text-left">
                            <span class="">Envio: </span>
                        </div>
                        <div class="col text-right">
                            <span class="font-bold">${{number_format($shippingPrice,2,'.',',')}}</span>
                        </div>
                    </div>

                    <hr>
                    <div class="row mb-3 justify-content-md-between">
                        <div class="col text-left">
                            <span class="">Total: </span>
                        </div>
                        <div class="col text-right">
                            <span class="font-bold">${{number_format($total,2,'.',',')}}</span>
                        </div>
                    </div>
                    <button class="btn btn-info btn-sm form-control">Proceder a pagar</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@stop
