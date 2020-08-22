<div class="modal modal-quick-view fade" id="quick-view-{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h2 class="h3 modal-title mb-1">{{$product->nombre}}</h2>
                    <h3 class="text-primary font-weight-light mb-0">${{number_format($product->precio_venta,2,'.',',')}}</h3>
                </div>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Product gallery-->
                    <div class="col-lg-7">
                        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;margin&quot;: 15 }"><img src="{{asset('/'.$product->url_imagen_principal)}}" alt="Product"><img src="img/shop/apparel/single/02.jpg" alt="Product"><img src="img/shop/apparel/single/03.jpg" alt="Product"><img src="img/shop/apparel/single/04.jpg" alt="Product"><img src="img/shop/apparel/single/05.jpg" alt="Product"></div>
                    </div>
                    <!-- Product details-->
                    <div class="col-lg-5 pt-4 pt-lg-0">
                        <form class="pb-4">
                            <div class="d-flex flex-wrap align-items-center pt-1">
                                <div>
                                    <input class="px-2 form-control mr-2" type="number" name="cantidad" style="width: 3.2rem;" value="1" required>
                                </div>
                                <div>
                                    <button class="btn btn-primary px-5 mr-2" type="submit"><i class="mr-2" data-feather="shopping-cart"></i>Agregar</button>
                                </div><a class="btn box-shadow-0 nav-link-inline my-2" href="#"><i class="align-middle mr-1" data-feather="heart" style="width: 1.1rem; height: 1.1rem;"></i> Lista de deseos</a>
                            </div>
                        </form>
                        <div class="card">
                            <div class="card-header py-3 bg-0">
                                <h3 class="h6 mb-0"><span class="d-inline-block pr-2 border-right mr-2 align-middle mt-n1"><i data-feather="info" style="width: 1.1rem; height: 1.1rem;"></i></span>Información del producto</h3>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li>SKU: #{{$product->SKU}}</li>
                                    <li>{{$product->category->nombre}}</li>
                                    <li>Marca {{$product->brand->nombre}}</li>
                                    <li><span class="badge badge-success">Disponible</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3 bg-0 d-flex justify-content-between">
                                <h3 class="h6 mb-0">
                                                    <span class="d-inline-block pr-2 border-right mr-2 align-middle mt-n1">
                                                        <i data-feather="info" style="width: 1.1rem; height: 1.1rem;"></i>
                                                    </span>Descripción
                                </h3>
                                <a href="">Descargar ficha tecnica</a>
                            </div>
                            <div class="card-body">
                                <p>{{$product->descripcion}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
