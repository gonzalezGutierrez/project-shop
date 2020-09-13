<div class="row">
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control " name="codigo_postal" value="{{old('codigo_postal')}}" id="" placeholder="">
                    @error('codigo_postal')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" class="form-control" value="{{old('estado')}}" name="estado" id="" placeholder="">
                    @error('estado')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Delegación / Municipio</label>
                    <input type="text" class="form-control " name="municipio" value="{{old('municipio')}}" id="" placeholder="">
                    @error('municipio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Colonia / Asentamiento</label>
                    <input type="text" class="form-control " value="{{old('colonia')}}" name="colonia" id="" placeholder="">
                    @error('colonia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Calle</label>
                    <input type="text" class="form-control " value="{{old('calle')}}" name="calle" id="" placeholder="">
                    @error('calle')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">N° Exterior</label>
                    <input type="text" class="form-control " value="{{old('n_exterior')}}" name="n_exterior" id="" placeholder="">
                    @error('n_exterior')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">N° Interior / Depto (opcional)</label>
                    <input type="text" class="form-control " value="{{old('n_interior')}}"  name="n_interior" id="" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="">Inidicaciones adicionales para entregar tus compras en esta</label>
                    <textarea  class="form-control" name="referencias" id="" cols="30" rows="10">{{old('referencias')}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
