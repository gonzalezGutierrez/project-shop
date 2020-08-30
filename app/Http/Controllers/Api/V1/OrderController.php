<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\ShoppingCart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //
    }
    public function show($transactionId)
    {
        try{

            $transaction = Transaction::where('transaccion_codigo',$transactionId)->firstOrFail();
            $payment_method = PaymentMethod::findOrFail($transaction->metodo_pago_id);
            $order = Order::where('transaccion_id',$transaction->id)->firstOrFail();
            $shoppingCart = ShoppingCart::findOrFail($order->carrito_id);
            $products = $shoppingCart->products()->get();

            $dataOrder = array(
                'order'=>[
                    'id'=>$order->id,
                    'total'=>'$'.number_format($order->total,2,'.',','),
                    'is_need_invoice'=>$order->facturar,
                    'status'=>$order->estatus,
                    'order_guide'=>$transaction->transaccion_codigo,
                    'order_date'=>$order->created_at->format('Y-m-d')
                ],
                'payment_method'=>[
                    'name'=>$payment_method->nombre
                ],
                'order_products'=>$products
            );

            return response()->json($dataOrder,200);

        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
    public function update(Request $request, $id)
    {
        //
    }
}
