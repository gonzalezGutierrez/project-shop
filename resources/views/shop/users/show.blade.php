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
            @if(Session::has('success'))
                <div class="col-md-12">
                    <div class="alert alert-primary" style="border-radius: 0px;">
                        <span class="">{{ Session::get('success') }}</span>
                    </div>
                </div>
            @endif
            @if(Session::has('danger'))
                <div class="col-md-12">
                    <div class="alert alert-danger" style="border-radius: 0px;">
                        <span class="">{{ Session::get('danger') }}</span>
                    </div>
                </div>
            @endif
            @include('layout.profile-sidebar')
            <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                <div class="card" style="background-color: #f8f8ff;">
                   <h5 class="card-header">Mis datos</h5>
                    <div class="card-body">
                        <form action="{{asset('users/'.$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 form-group col-lg-6 col-xs-12 col-sm-12">
                                    <label for="">Nombre: </label>
                                    <input type="text" class="form-control" id="name" name="nombre" value="{{$user->id ? $user->nombre :old('nombre')}}" placeholder="Nombre">
                                    @error('nombre')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group col-lg-6 col-xs-12 col-sm-12">
                                    <label for="">Apellido: </label>
                                    <input type="text" class="form-control" id="name" name="apellido" value="{{$user->id ? $user->apellido :old('apellido')}}" placeholder="Apellido">
                                    @error('apellido')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="apellido" value="{{$user->id ? $user->telefono : old('telefono')}}" name="telefono" placeholder="Telefono">
                                    @error('telefono')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->id ? $user->email :old('email')}}" placeholder="Dirección de correo">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" value="submit"
                                    class="btn btn-info ">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<section class="image-bg default-bg" style="background:#003b77 url({{asset('shop/assets/img/pattern.png')}}) repeat;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading light mx-auto">
                        <h3>Gracias por ser parte de MyDibu Medical</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="ht-10"></div>
    </section>
    <div class="clearfix"></div>
    <section class="pd-0 overlay-top">
        <div class="container">

            <div class="row mrg-0 bg-white box-shadow pt-5 pb-3 border--radius">

                <div class="col-md-12 col-lg-12 mb-2">
                    <div class="text-center">
                        <img src="{{asset('logo.jpg')}}" style="width: 150px; height: 150px; border-radius: 50%; padding: 10px; border:2px solid rgba(0,0,0,0.2);" alt="">
                        <h3>{{Auth::user()->nombre}} {{Auth::user()->apellido}}</h3>
                        <h6>{{Auth::user()->email}}</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                           <i class="fa fa-user text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Mi cuenta</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                            <i class="fa fa-check text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Ordenes</h5>
                            <span class="partner-info"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                            <i class="fa fa-map-marker text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Mis direcciones</h5>
                            <span class="partner-info"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                            <i class="fa fa-file-pdf-o text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Facturas</h5>
                            <span class="partner-info"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                            <i class="fa fa-lock text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Actualizar contraseña</h5>
                            <span class="partner-info"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="partner-box mb-4">
                        <div class="partner-box-thumb">
                            <i class="fa fa-times text-primary" style="font-size: 80px;"></i>
                        </div>
                        <div class="partner-box-caption">
                            <h5>Cerrar sesión</h5>
                            <span class="partner-info"></span>
                        </div>
                    </div>
                </div>

            </div>
            <!--./row -->

        </div>
    </section>
    <div class="clearfix m-b-30"></div>--}}
@stop
