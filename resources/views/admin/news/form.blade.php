@if($edit)
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Actualiza el estatus de la noticia</h2>
                </header>
                <div class="panel-body">
                    <div class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Estatus</label>
                            <div class="col-md-6">
                                {!! Form::select('estatus',[true=>'Activo',false=>'Inactivo'],$entry->estatus,['class'=>'form-control']) !!}
                                @error('estatus')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Información de la noticia</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Titulo</label>
                        <div class="col-md-6">
                            {!! Form::text('titulo',$entry->titulo == null ? old('titulo') : $entry->titulo ,['class'=>'form-control']) !!}
                            @error('titulo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Encabezado</label>
                        <div class="col-md-6">
                            {!! Form::text('encabezado',$entry->encabezado == null ? old('encabezado') : $entry->encabezado ,['class'=>'form-control']) !!}
                            @error('encabezado')
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
    <div class="col-md-12">
        <div class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Portada de la noticia</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imagen de portada</label>
                        <div class="col-md-6">
                            {!! Form::file('file',['class'=>'form-control']) !!}
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="thumb-image"><img src="{{asset('/'.$entry->url_image_news)}}" width="100%" alt=""></div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Cuerpo de la noticia</h2>
            </header>
            <div class="panel-body">
                <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Descripción</label>
                        <div class="col-md-6">
                            {!! Form::textarea('descripcion',$entry->descripcion == null ? old('descripcion') : $entry->descripcion,['class'=>'form-control']) !!}
                            @error('descripcion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Guardar</button>
    </div>
</div>
