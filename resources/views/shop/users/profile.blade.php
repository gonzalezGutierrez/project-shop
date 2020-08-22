@extends('layout.shop_layout')
@section('content')
    <div class="container pt-lg-3 pb-5 mb-sm-3">
        <!-- Toast notifications-->
        <div class="toast-container toast-bottom-center">
            <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to cart!</span>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">This item was added to your cart.</div>
            </div>
            <div class="toast mb-3" id="compare-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-info text-white"><i class="mr-2" data-feather="info" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to comparison!</span>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">This item was added to comparison table.</div>
            </div>
            <div class="toast mb-3" id="wishlist-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-info text-white"><i class="mr-2" data-feather="info" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Added to wishlist!</span>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">This item was added to your wishlist.</div>
            </div>
            <div class="toast mb-3" id="profile-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Updated!</span>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">Your profile info updated successfuly.</div>
            </div>
            <div class="toast mb-3" id="address-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white"><i class="mr-2" data-feather="check-circle" style="width: 1.25rem; height: 1.25rem;"></i><span class="font-weight-semibold mr-auto">Updated!</span>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">Your addresses info updated successfuly.</div>
            </div>
        </div>
        <div class="row pt-5">
            <!-- Sidebar-->
            <div class="col-xl-3 col-lg-4">
                <!-- Customer picture--><a class="gallery-item mb-grid-gutter mx-auto" href="#" style="max-width: 18.75rem;"><img src="img/account/customer-lg.jpg" alt="Daniel Adams">
                    <div class="gallery-caption">
                        <div class="gallery-indicator"><i class="gallery-indicator-icon" data-feather="refresh-ccw"></i></div>Change profile picture
                    </div></a>
                <!-- Technical support + Tickets (visible Desktop)-->
                <div class="d-none d-lg-block">
                    <h6 class="font-size-sm mb-3 pb-2 border-bottom">Technical support</h6>
                    <ul class="list-unstyled">
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="mail" style="width: .875rem; height: .875rem;"></i><a class="nav-link-inline" href="mailto:support@example.com">support@example.com</a></li>
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="phone" style="width: .875rem; height: .875rem;"></i><a class="nav-link-inline" href="tel:+100331697720">+1 00 33 169 7720</a></li>
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="clock" style="width: .875rem; height: .875rem;"></i>1-2 business days</li>
                    </ul>
                    <div class="pt-2"><a class="btn btn-outline-secondary btn-sm btn-block" href="account-tickets.html"><i class="mr-1" data-feather="tag"></i>My tickets (1)</a><a class="btn btn-success btn-sm btn-block" href="account-tickets.html" data-toggle="modal" data-target="#open-ticket">Submit new ticket</a></div>
                </div>
            </div>
            <!-- Main content-->
            <div class="col-lg-8 offset-xl-1">
                <!-- Customer details-->
                <div class="d-flex flex-wrap justify-content-between pb-4">
                    <div class="pt-3 mr-3">
                        <h3 class="mb-0">Daniel Adams</h3><span class="font-size-sm text-warning">d.adams@example.com</span>
                    </div>
                    <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="account-signin.html"><i class="mr-1" data-feather="log-out"></i>Sign Out</a></div>
                </div>
                <ul class="list-unstyled border p-3 mb-4">
                    <li class="pb-1"><span class="opacity-80">&ndash; Joined:</span><span class="font-weight-semibold ml-1">Jan 13, 2018</span></li>
                    <li class="pb-1"><span class="opacity-80">&ndash; Total orders:</span><span class="font-weight-semibold ml-1">15</span></li>
                    <li class="pb-1"><span class="opacity-80">&ndash; Total spent:</span><span class="font-weight-semibold ml-1">$5,864</span></li>
                    <li><span class="opacity-80">&ndash; Reward points:</span><span class="font-weight-semibold ml-1">586</span></li>
                </ul>
                <!-- Navigation (visible sm-up)-->
                <ul class="nav nav-tabs d-none d-sm-flex">
                    <li class="nav-item"><a class="nav-link" href="account-orders.html"><i data-feather="shopping-bag"></i>&nbsp;My orders<span class="badge badge-pill badge-secondary bg-0 border ml-2"><span class="text-primary">1</span></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="account-wishlist.html"><i data-feather="heart"></i>&nbsp;Wishlist<span class="badge badge-pill badge-secondary bg-0 border ml-2"><span class="text-primary">3</span></span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown"><i data-feather="settings"></i>&nbsp;Account settings</a>
                        <div class="dropdown-menu"><a class="dropdown-item active" href="account-profile.html">Profile info</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="account-address.html">Addresses</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="account-payment.html">Payment methods</a>
                        </div>
                    </li>
                </ul>
                <!-- Navigation (visible sm-down)-->
                <div class="d-sm-none pb-4">
                    <button class="btn btn-primary btn-block mb-2" type="button" data-toggle="collapse" data-target="#account-menu"><i class="mr-2" data-feather="menu"></i>Menu</button>
                    <div class="collapse" id="account-menu">
                        <div class="list-group"><a class="list-group-item list-group-item-action" href="account-orders.html"><i class="mr-2" data-feather="shopping-bag" style="width: 1rem; height: 1rem;"></i>My orders<span class="badge badge-pill badge-secondary bg-0 border ml-2"><span class="text-primary">1</span></span></a><a class="list-group-item list-group-item-action" href="account-wishlist.html"><i class="mr-2" data-feather="heart" style="width: 1rem; height: 1rem;"></i>Wishlist<span class="badge badge-pill badge-secondary bg-0 border ml-2"><span class="text-primary">3</span></span></a><a class="list-group-item list-group-item-action active" href="account-profile.html"><i class="mr-2" data-feather="user" style="width: 1rem; height: 1rem;"></i>Profile info</a><a class="list-group-item list-group-item-action" href="account-address.html"><i class="mr-2" data-feather="map-pin" style="width: 1rem; height: 1rem;"></i>Addresses</a><a class="list-group-item list-group-item-action" href="account-payment.html"><i class="mr-2" data-feather="credit-card" style="width: 1rem; height: 1rem;"></i>Payment methods</a></div>
                    </div>
                </div>
                <!-- Profile info-->
                <h5 class="mb-4 pt-sm-3">Profile info</h5>
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">First Name</label>
                            <input class="form-control" type="text" id="account-fn" value="Daniel" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ln">Last Name</label>
                            <input class="form-control" type="text" id="account-ln" value="Adams" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">Email Address</label>
                            <input class="form-control" type="email" id="account-email" value="daniel.adams@example.com" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Phone Number</label>
                            <input class="form-control" type="text" id="account-phone" value="+7 (805) 348 95 72" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">New Password</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirm Password</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox d-block">
                                <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                                <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                            </div>
                            <button class="btn btn-primary mt-3 mt-sm-0" type="button" data-toggle="toast" data-target="#profile-toast">Update profile</button>
                        </div>
                    </div>
                </form>
                <!-- Technical support + Tickets (visible Mobile)-->
                <div class="d-lg-none bg-secondary px-3 py-4 mt-5">
                    <h6 class="font-size-sm mb-3 pb-2 border-bottom">Technical support</h6>
                    <ul class="list-unstyled">
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="mail" style="width: .875rem; height: .875rem;"></i><a class="nav-link-inline" href="mailto:support@example.com">support@example.com</a></li>
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="phone" style="width: .875rem; height: .875rem;"></i><a class="nav-link-inline" href="tel:+100331697720">+1 00 33 169 7720</a></li>
                        <li class="font-size-sm mb-2"><i class="text-muted mr-2" data-feather="clock" style="width: .875rem; height: .875rem;"></i>1-2 business days</li>
                    </ul>
                    <div class="pt-2"><a class="btn btn-outline-secondary btn-sm btn-block" href="account-tickets.html"><i class="mr-1" data-feather="tag"></i>My tickets (1)</a><a class="btn btn-success btn-sm btn-block" href="account-tickets.html" data-toggle="modal" data-target="#open-ticket">Submit new ticket</a></div>
                </div>
            </div>
        </div>
    </div>
@stop
