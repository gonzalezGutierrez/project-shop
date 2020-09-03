@extends('layout.shop_layout')
@section('content')
    <div class="page-title-wrap pt-img-wrap" style="background:url(https://via.placeholder.com/1920x900) no-repeat;">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="pt-caption text-center mt-5">
                    <h1 class="text-uppercase ">Se un miembro PYMES</h1>
                    <a href="{{asset('/register/pymes')}}" class="btn btn-info">Registrate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Single Service Start ================================== -->
    <section>
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h2>¿Que es un miembro PYMES?</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt. </p>
                        <ul class="list-style style-1">
                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</li>
                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('shop/about/about-1.jfif')}}" class="img-fluid mx-auto" alt="">
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
@stop
