@extends('layout.shop_layout')
@section('title','Crear cuenta')
@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block-content bg-dark-blue inverse-color text-center"">
                        <img src="{{asset('logo.jpg')}}" class="mb-2" style="width: 220px; border-radius: 50%; height: 220px;" alt="">
                        <h4>¿Ya tienes una cuenta?</h4>
                        <a class="btn btn-info mb-xl-2 mb-sm-2" href="{{asset('register/pyme')}}">Se un miembro PYME</a>
                        <a class="btn btn-outline-info" href="{{asset('/login')}}">Acceder</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3 class="mb-3">Crear una cuenta MyDibu Medical</h3>
                        <form action="{{asset('users')}}" method="POST" class="row login_form" id="register_form">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
                                @error('nombre')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="apellido" value="{{old('apellido')}}" name="apellido" placeholder="Apellido">
                                @error('apellido')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="apellido" value="{{old('telefono')}}" name="telefono" placeholder="Telefono">
                                @error('telefono')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Dirección de correo">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit"
                                        class="btn btn-info  w-100">Registrate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
