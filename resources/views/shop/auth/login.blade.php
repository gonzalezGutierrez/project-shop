@extends('layout.shop_layout')
@section('content')
    <div class="container pb-5 mb-sm-4">
        <div class="row pt-5">
            <div class="col-md-6 pt-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h4 mb-1">Acceso a tu cuenta</h2>
                        <div class="d-sm-flex align-items-center py-3">
                            <h3 class="h6 font-weight-semibold opacity-70 mb-3 mb-sm-2 mr-sm-3">Con redes sociales:</h3>
                            <div><a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Facebook"><i class="flaticon-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with Twitter"><i class="flaticon-twitter"></i></a><a class="social-btn sb-linkedin mr-2 mb-2" href="#" data-toggle="tooltip" title="Sign in with LinkedIn"><i class="flaticon-linkedin"></i></a></div>
                        </div>
                        <hr>
                        <h3 class="h6 font-weight-semibold opacity-70 pt-4 pb-2">O Ingresa con tus credenciales</h3>
                        <form action="{{asset('login')}}" class="needs-validation" novalidate method="POST">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i data-feather="mail"></i></span></div>
                                <input class="form-control" type="email" value="{{old('email')}}" name="email" placeholder="Dirección de correo" required>
                                <div class="invalid-feedback">Por favor ingresa tu dirección de correo electronico!</div>
                                @error('email')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i data-feather="lock"></i></span></div>
                                <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                                <div class="invalid-feedback">Por favor ingresa tu contraseña!</div>
                                @error('password')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="password" type="checkbox" checked id="remember_me">
                                    <label class="custom-control-label" for="remember_me">Recordar sesión</label>
                                </div><a class="nav-link-inline font-size-sm" href="account-password-recovery.html">¿Olvidaste tu contraseña?</a>
                            </div>
                            <hr class="mt-4">
                            <div class="text-right pt-4">
                                <button class="btn btn-primary" type="submit">Acceder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-5 pt-sm-3">
                <h2 class="h4 mb-3">No account? Sign up</h2>
                <p class="text-muted mb-4">Registration takes less than a minute but gives you full control over your orders.</p>
                <form action="{{asset('auth/register')}}" class="needs-validation" method="POST" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-fn">Nombre(s)</label>
                                <input class="form-control" name="nombre" value="{{old('nombre')}}" type="text" required id="reg-fn">
                                <div class="invalid-feedback">Por favor ingresa tu nombre</div>
                                @error('nombre')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-ln">Apellido paterno</label>
                                <input class="form-control" type="text" name="apellido_paterno"  value="{{old('apellido_paterno')}}" required id="reg-ln">
                                <div class="invalid-feedback">Por favor ingresa tu apellido paterno</div>
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Apellido materno</label>
                                <input class="form-control" type="text" name="apellido_materno" value="{{old('apellido_materno')}}" required id="reg-phone">
                                <div class="invalid-feedback">Por favor ingresa tu apellido materno</div>
                                @error('apellido_materno')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-email">Dirección de correo</label>
                                <input class="form-control" name="email" value="{{old('email')}}" type="email" required id="reg-email">
                                <div class="invalid-feedback">Por favor ingresa tu dirección de correo</div>
                                @error('email')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-password">Contraseña</label>
                                <input class="form-control" name="password" type="password" required id="reg-password">
                                <div class="invalid-feedback">Por favor ingresa tu contraseña</div>
                                @error('password')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-password-confirm">Confirm Password</label>
                                <input class="form-control" name="password_confirmation" type="password" required id="reg-password-confirm">
                                <div class="invalid-feedback">Las dos contraseñas son distintas</div>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" style="display: block;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
