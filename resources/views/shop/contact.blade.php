@extends('layout.shop_layout')
@section('title','Contacto')
@section('content')
    <div class="container-fluid breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{asset('/')}}">
                    Inicio
                    </a>
                    <a href="javascript:void(0)">
                        <span>
                            <i class="ti-arrow-right"></i>
                        </span>
                        Contacto
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-title-wrap pt-img-wrap" style="background:url(https://imcuae.com/wp-content/uploads/2017/09/contact.jpg) no-repeat;">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="pt-caption text-center mt-5">
                    <h1>MyDibu Medical Supplies
                        Distribution Business</h1>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">

            <div class="row mb-4">

                <div class="col-lg-4 col-md-4">
                    <div class="contact-box">
                        <i class="ti-map-alt"></i>
                        <h4>MyDibu Medical</h4>
                        Venta y asesoría de artículos de seguridad medico hospitalaria y personal
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="contact-box pb-7">
                        <i class="ti-email"></i>
                        <h4>Correo electronico</h4>
                        mydibumedical@gmail.com
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="contact-box">
                        <i class="ti-headphone"></i>
                        <h4>Ventas y asesoría</h4>
                        55 6011 1766
                    </div>
                </div>

            </div>

        </div>
    </section>
@stop