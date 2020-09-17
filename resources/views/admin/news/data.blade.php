<section class="panel">
    <header class="panel-heading" style="display: flex;  justify-content: space-between; align-items: center;">
        <h2 class="panel-title">Noticias</h2>
        <a href="{{asset('administracion/news/create')}}" class="btn btn-sm btn-success">Agregar nuevo</a>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Encabezado</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td class="text-center">{{$entry->id}}</td>
                    <td class="text-center">{{$entry->titulo}}</td>
                    <td class="text-center">{{$entry->encabezado}}</td>
                    <td class="text-center">
                        <span class="label @if($entry->estatus) label-success @else label-danger @endif">
                            @if($entry->estatus)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-{{$entry->id}}" class="btn btn-sm btn-info"><i class="fa fa-chevron-circle-right"></i></a>
                        <div class="modal fade bd-example-modal-lg-{{$entry->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{$entry->encabezado}}</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{asset('administracion/news/'.$entry->id)}}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('put')
                                            @include('admin.news.form',['edit'=>true])
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
