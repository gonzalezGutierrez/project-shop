<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class OrderController extends Controller
{

    public function index(Request $request) {
        $orders = Order::get();
        return view('admin.orders.index',compact('orders'));
    }

}
