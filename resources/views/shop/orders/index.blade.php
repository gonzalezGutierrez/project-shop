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
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Mis ordenes</h5>
                        <input type="search" placeholder="Buscar por codigo de orden" class="form-control w-50">
                    </div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
