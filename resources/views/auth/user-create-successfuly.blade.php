@extends('layout.shop_layout')
@section('content')
    <section class="">
        <div class="container">
            <div class="subscribe text-center">
                <img src="{{asset('logo.jpg')}}" style="width: 120px; height: 120px; border-radius: 50%;" alt="">
                <h3 class="subscribe__title">Registrado correctamente</h3>
                <i class="fa fa-check" style="font-size: 45px !important; color:green;" ></i>
                <div id="mc_embed_signup">
                    <h5>Ha sido enviado un correo electronico a tu dirección {{$user->email}} para activar tu cuenta</h5>
                </div>
            </div>
        </div>
    </section>
@stop
