@extends('layout.errors')
@section('content')

    <div class="container pt-4 p-t-40 m-t-40">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">

                        <img src="{{asset('fav.jpg')}}"  style="width: 400px; height: 400px"  alt="">
                        <h2>Pagína no encontrada</h2>
                        <a href="{{asset('/shop-general')}}" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
