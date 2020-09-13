<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function orderSuccess($transaction) {

        $user = Auth::user();

        $order = Order::join('transactions','orders.transaccion_id','transactions.id')
            ->where('transactions.transaccion_codigo',$transaction)
            ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
            ->first();


        if (!$order) {
            return redirect('/orders');
        }

        return view('shop.orders.order-success',compact('order'));
    }

    public function index(Request $request) {

        $user = Auth::user();
        $transaction = $request->code_order;
        if ($transaction) {
            $orders = Order::join('shopping_carts','orders.carrito_id','shopping_carts.id')
                ->join('transactions','orders.transaccion_id','transactions.id')
                ->where('shopping_carts.usuario_id',$user->id)
                ->where('transactions.transaccion_codigo',$request->code_order)
                ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
                ->orderBy('orders.id','desc')
                ->get();
        }else{
            $transaction = false;
            $orders = Order::join('shopping_carts','orders.carrito_id','shopping_carts.id')
                ->join('transactions','orders.transaccion_id','transactions.id')
                ->where('shopping_carts.usuario_id',$user->id)
                ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
                ->orderBy('orders.id','desc')
                ->paginate();
        }
        return view('shop.orders.index',compact('orders','transaction'));
    }

}
