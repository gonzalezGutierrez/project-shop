<div class="col-lg-{{$col_lg}} col-md-{{$col_md}} col-sm-12 col-xs-12 mb-4">
    <div class="product-wrap">
        <div class="product-caption">
            <div class="product-caption-info">
                <div class="product-caption-thumb">
                    <div class="">
                        <img src="{{asset('/'.$product->url_imagen_principal)}}" style="width: 100%; height: 200px;" class="img-fluid mx-auto" alt="">
                    </div>
                </div>
                <div class="uc_product_details">
                    <a href="{{asset('/products/'.$product->slug)}}">
                        <span>{{$product->nombre}}</span>
                    </a>
                    <span class="uc_price">${{number_format($product->precio_venta,2,'.',',')}}</span>
                    <div class="">
                        <a href="#" class="btn btn-outline-info"><i class="fa fa-shopping"></i> Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
