@extends('layout.shop_layout')
@section('title','Mi carrito')
@section('content')
    <section>
        <div class="container">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="box box-body padd-0">
                        <div class="panel">
                            <div class="panel-heading bg-light-success text-success p-15"> Tu carrito ({{$productsCount}} producto(s))</div>
                            <div class="panel-wrapper">
                                <div class="panel-body padd-15">
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product info</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th style="text-align:center">Total</th>
                                                <th style="text-align:center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="https://via.placeholder.com/800x800" alt="iMac" width="80"></td>
                                                <td>
                                                    <h5 class="font-500">Rounded Chair</h5>
                                                </td>
                                                <td>$153</td>
                                                <td>
                                                    <input type="number" class="form-control b-all" value="1">
                                                </td>
                                                <td>$153</td>
                                                <td><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="https://via.placeholder.com/800x800" alt="iMac" width="80"></td>
                                                <td>
                                                    <h5 class="font-500">Rounded Chair</h5>
                                                </td>
                                                <td>$153</td>
                                                <td>
                                                    <input type="number" class="form-control b-all" value="1">
                                                </td>
                                                <td>$153</td>
                                                <td><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="https://via.placeholder.com/800x800" alt="iMac" width="80"></td>
                                                <td>
                                                    <h5 class="font-500">Rounded Chair</h5>
                                                </td>
                                                <td>$153</td>
                                                <td>
                                                    <input type="number" class="form-control b-all" value="1">
                                                </td>
                                                <td>$153</td>
                                                <td><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="https://via.placeholder.com/800x800" alt="iMac" width="80"></td>
                                                <td>
                                                    <h5 class="font-500">Rounded Chair</h5>
                                                </td>
                                                <td>$153</td>
                                                <td>
                                                    <input type="number" class="form-control b-all" value="1">
                                                </td>
                                                <td>$153</td>
                                                <td><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <hr>
                                        <button class="btn btn-success pull-right woo-btn">Update Cart</button>
                                        <div class="vr-add-form mt-3 mb-3">
                                            <input type="text" class="form-control b-all" placeholder="Apply code">
                                            <button type="button" class="btn btn-primary woo-btn">Apply coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="booking-price">
                        <form>
                            <h4 class="mb-3">Cart totals</h4>

                            <!-- your Dates -->
                            <div class="booking-price-detail side-list">
                                <h5>Your Dates</h5>
                                <ul>
                                    <li>Appearing<strong class="pull-right">12 Jan 2018</strong></li>
                                    <li>Disappearing<strong class="pull-right">20 jan 2018</strong></li>
                                </ul>
                            </div>

                            <!-- Your Stay -->
                            <div class="booking-price-detail side-list">
                                <h5>Your Stay</h5>
                                <ul>
                                    <li>Rent(1 Week)<strong class="pull-right">$200.00</strong></li>
                                    <li>Deposit<strong class="pull-right">$300.00</strong></li>
                                    <li>V.A.T<strong class="pull-right">$28.00</strong></li>
                                </ul>
                            </div>

                            <!-- Total Cost -->
                            <div class="booking-price-detail side-list">
                                <ul>
                                    <li>Total Cost<strong class="theme-cl pull-right">$528</strong></li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-lg woo-btn">Proceed to checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
