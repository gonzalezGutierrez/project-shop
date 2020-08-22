<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Información</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nombre del producto</label>
                        <div class="col-md-6">
                            {!! Form::text('nombre',$product->nombre == null ? old('nombres') : $product->nombre ,['class'=>'form-control']) !!}
                            @error('nombre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">SKU del producto</label>
                        <div class="col-md-6">
                            {!! Form::text('SKU',$product->SKU == null ? old('SKU') : $product->SKU,['class'=>'form-control']) !!}
                            @error('SKU')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Precio de venta del producto</label>
                        <div class="col-md-6">
                            {!! Form::text('precio_venta',$product->precio_venta== null ? old('precio_venta') : $product->precio_venta,['class'=>'form-control']) !!}
                            <span class="text-success"> <i class="fa  fa-question-circle"></i> Indica el precio de venta del producto.</span>
                            <br>
                            @error('precio_venta')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@if($edit)
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Fotografia principal</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <img  style="width: 100%;" src="{{asset($product->url_imagen_principal)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="">Agregar imagenes</a>
            </div>
        </div>
    </div>
</div>
@endif
@if (!$edit)
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Fotografia principal</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imagen de portada de producto</label>
                        <div class="col-md-6">
                            {!! Form::file('file',['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Inventario</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Existencia Inicial</label>
                        <div class="col-md-6">
                            {!! Form::text('existencia',$product->existencia == null ? old('existencia') : $product->existencia,['class'=>'form-control']) !!}
                            <span class="text-success"> <i class="fa  fa-question-circle"></i> La existencia es la cantidad de producto con el que se cuenta actualmente.</span>
                            @error('existencia')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Seleccionar un proveedor</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Proveedor</label>
                        <div class="col-md-6">
                            {!! Form::select('proveedor_id',$providers,'',['class'=>'form-control populate','data-plugin-selectTwo']) !!}
                            @error('proveedor_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Costo del producto</label>
                        <div class="col-md-6" id="costo">
                            {!! Form::text('precio','',['class'=>'form-control']) !!}
                            <span class="text-success"> <i class="fa  fa-question-circle"></i> Indica el costo de compra con el proveedor seleccionado</span>
                            <br>
                            @error('precio')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endif

<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Categoria y marca</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Categoria</label>
                        <div class="col-md-6">
                            {!! Form::select('categoria_id',$categories,$product->categoria_id,['class'=>'form-control populate','data-plugin-selectTwo']) !!}
                            <br>
                            @error('categoria_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Marca</label>
                        <div class="col-md-6">
                            {!! Form::select('marca_id',$brands,$product->marca_id,['class'=>'form-control populate','data-plugin-selectTwo']) !!}
                            <br>
                            @error('marca_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Ficha tecnica</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Caracteristicas</label>
                        <div class="col-md-6">
                            {{Form::textarea('caracteristicas',$product->caracteristicas,['class'=>'form-control populate'])}}
                            <br>
                            @error('caracteristicas')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Descripción</label>
                        <div class="col-md-6">
                            {{Form::textarea('descripcion',$product->descripcion,['class'=>'form-control populate'])}}
                            <br>
                            @error('descripcion')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Especificaciones</label>
                        <div class="col-md-6">
                            {{Form::textarea('especificaciones',$product->especificaciones,['class'=>'form-control populate'])}}
                            <br>
                            @error('especificaciones')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Uso</label>
                        <div class="col-md-6">
                            {{Form::textarea('uso',$product->uso,['class'=>'form-control populate'])}}
                            <br>
                            @error('uso')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <button class="btn btn-success">Guardar</button>
    </div>
</div>
