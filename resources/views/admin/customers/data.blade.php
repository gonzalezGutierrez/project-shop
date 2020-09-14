<section class="panel">
    <header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
        <h2 class="panel-title">Productos</h2>
        <a href="{{asset('administracion/customers/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Estatus</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="text-center">{{$customer->id}}</td>
                    <td class="text-center">
                        <a href="{{asset('administracion/clientes/'.$customer->id)}}">
                            {{$customer->nombre}} {{$customer->apellido}}
                        </a>
                    </td>
                    <td class="text-center">{{$customer->email}}</td>
                    <td class="text-center">{{$customer->telefono}}</td>
                    <td class="text-center">
                        @if($customer->estatus == 'activo')
                            <span class="label label-success">{{$customer->estatus}}</span>
                        @else
                            <span class="label label-danger">{{$customer->estatus}}</span
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
