<section class="panel">
    <header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
        <h2 class="panel-title">Productos</h2>
        <a href="{{asset('administracion/productos/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">SKU</th>
                <th class="text-center">Existencia</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->id}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->nombre}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->SKU}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->existencia}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">${{number_format($product->precio_venta,2,',','.')}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->brand->nombre}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">{{$product->category->nombre}}</td>
                    <td style="line-height: 40px;" class="text-center" style="line-height: 30px;">
                        <a href="{{asset('/administracion/productos/'.$product->id.'/edit')}}" class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{asset('/administracion/productos/'.$product->id)}}" class="btn btn-info btn-sm">
                            <i class="fa fa-chevron-right"></i>
                        </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
