<div class="col-md-6 col-lg-4 col-xl-3">
    <div class="card text-center card-product">
        <div class="card-product__img">
            <img class="card-img" src="{{asset('/'.$product->url_imagen_principal)}}" alt="">
            <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
            </ul>
        </div>
        <div class="card-body">
            <p>{{$product->category->nombre}}</p>
            <h4 class="card-product__title"><a href="{{asset('products/'.$product->slug)}}">{{$product->nombre}}</a></h4>
            <p class="card-product__price">${{number_format($product->precio_venta,2,'.',',')}}</p>
        </div>
    </div>
</div>
