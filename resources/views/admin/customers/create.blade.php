@extends('layout.admin_layout')
@section('title','Agregar cliente')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Agregar cliente</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            Resumen
                        </a>
                    </li>
                    <li><span>Agregar nuevo</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Información del cliente</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{asset('administracion/clientes/')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                {!! Form::label('Nombre','Nombre del cliente') !!}
                                {!! Form::text('nombre',$customer->nombre,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('apellido','Apellido del cliente') !!}
                                {!! Form::text('apellido',$customer->apellido,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Dirección de correo del cliente') !!}
                                {!! Form::text('email',$customer->email,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('telefono','Numero telefonico del cliente') !!}
                                {!! Form::text('telefono',$customer->telefono,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Repite tu contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
                                @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
