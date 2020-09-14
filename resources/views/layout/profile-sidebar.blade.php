<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
    <div class="card" style="background-color: #f8f8ff;">
        <div class="card-body">
            <a href="{{asset('/orders')}}" @if(Request::is('orders')) class="text-primary" @endif><i class="fa fa-check"></i> Ordenes</a>
            <hr>
            <a href="{{asset('/address')}}" @if(Request::is('address')) class="text-primary" @endif><i class="fa fa-map-marker"></i> Direcciones</a>
            <hr>
            <a href="{{asset('/account')}}" @if(Request::is('account')) class="text-primary" @endif><i class="fa fa-user"></i> Mi cuenta</a>
            <hr>
            <a href=""><i class="fa fa-lock"></i> Actualizar contraseña</a>
            <hr>
            <a href="">Salir</a>
        </div>
    </div>
</div>
