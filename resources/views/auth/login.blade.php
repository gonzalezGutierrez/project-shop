@extends('layout.shop_layout')
@section('title','Login')
@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block-content bg-dark-blue inverse-color text-center">
                        <img src="{{asset('logo.jpg')}}" class="mb-2" style="width: 220px; border-radius: 50%; height: 220px;" alt="">
                        <h3 class="text-white"> MyDibu Medical</h3>
                        <h6>Aportando Valor a la Salud</h6>
                        <a class="btn btn-info" href="{{asset('users/create')}}">Crear una cuenta</a>
                        <a class="btn btn-outline-info" href="{{asset('users/create-pymes')}}">Se un miembro PYME</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Accede con tus credenciales</h3>
                        <form action="{{{asset('login')}}}" method="POST" class="row login_form" id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="name" name="email" placeholder="Dirección de correo electronico">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="password" placeholder="Contraseña">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Recordad sesión</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn btn-info mb-2 w-100">Acceder</button>
                                <a href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
