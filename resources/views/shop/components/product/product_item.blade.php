<div class="col-lg-{{$col_lg}} col-md-{{$col_md}} col-sm-12 col-xs-12 mb-4">
    <a href="{{asset('/products/'.$product->slug)}}">
        <div class="product-wrap">
            <div class="product-caption">
                <div class="product-caption-info">
                    <div class="product-caption-thumb">
                        <div class="">
                            <img src="{{asset('/'.$product->url_imagen_principal)}}" style="width: 100%; height: 200px;" class="img-fluid mx-auto" alt="">
                        </div>
                    </div>
                    <div class="uc_product_details mt-2">
                        <a href="{{asset('/products/'.$product->slug)}}">
                            <span>{{$product->nombre}}</span>
                        </a>
                        <span class="uc_price">${{number_format($product->precio_venta,2,'.',',')}}</span>
                        <div class="">
                            <form action="{{asset('product_in_shopping_cart')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="producto_id">
                                <input type="hidden" value="1" name="cantidad">
                                <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-shopping"></i> Agregar al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
