<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-heading">
                <h3>Información</h3>
            </div>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nombre de la categoria</label>
                        <div class="col-md-6">
                            {!! Form::text('nombre',$category->nombre == null ? old('nombre') : $category->nombre ,['class'=>'form-control']) !!}
                            @error('nombre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imagen</label>
                        <div class="col-md-6">
                            {!! Form::file('file',['class'=>'form-control']) !!}
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                            <img src="{{asset('/'.$category->url_imagen)}}" class="category-image"  alt="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Descripción</label>
                        <div class="col-md-6">
                            {!! Form::textarea('descripcion',$category->descripcion == null ? old('descripcion') : $category->descripcion ,['class'=>'form-control']) !!}
                            @error('descripcion')
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
