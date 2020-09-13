@extends('layout.shop_layout')
@section('title','Mis datos')
@section('content')

    <section class="image-bg default-bg" style="background:#003b77 url({{asset('shop/assets/img/pattern.png')}}) repeat;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Gracias por ser parte de MyDibu Medical</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mt-4 mb-4">
            @include('layout.profile-sidebar')
            <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                <div class="card" style="background-color: #f8f8ff;">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                        <h5 class="card-title">Mis direcciones</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($ubications as $ubication)
                                <li class="list-group-item">
                                    Calle {{$ubication->calle}}
                                    N° {{$ubication->n_exterior}}
                                    y N° Interior {{$ubication->n_interior}}
                                    Colonia {{$ubication->colonia}}
                                    {{$ubication->municipio}} ,
                                    {{$ubication->estado}} ,
                                    {{$ubication->codigo_postal}}
                                    <br>
                                    <strong>Rerefencias: </strong>  {{$ubication->referencias}}
                                    <hr>
                                    <a href="" class="btn btn-info btn-sm">Actualizar</a>
                                    <form action="{{asset('address/'.$ubication->id)}}" style="display: inline-block;" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
