@extends('layout.shop_layout')
@section('title','Login')
@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                            <img src="{{asset('logo.jpg')}}" class="" style="width: 50%; margin: auto; border-radius: 50%; height: 220px;" alt="">
                            <h3 class="text-white"> MyDibu Medical</h3>
                            <h6>Aportando Valor a la Salud</h6>
                            <a class="btn btn-info btn-sm" href="{{asset('users/create')}}">Crear una cuenta</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Accede con tus credenciales</h3>
                        </div>
                        <form action="{{{asset('login')}}}" method="POST" class="row login_form card-body" id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="name" name="email" value="{{old('email')}}" placeholder="Dirección de correo electronico">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="password" placeholder="Contraseña">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
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
