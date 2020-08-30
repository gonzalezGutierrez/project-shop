<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ShoppingCart;
use App\Models\Transaction;
use App\Services\PaypalService;
use Illuminate\Http\Request;

class PayController extends Controller
{

    public function getOrCreateShoppingCart($shopping_cart_id) {
        return ShoppingCart::findOrCreateById($shopping_cart_id);
    }

    public function store(Request $request)
    {
        $payment = resolve(PaypalService::class);

        $shoppingCartId = $request->shopping_cart_id;
        $shoppingCart = $this->getOrCreateShoppingCart($shoppingCartId);

        $total = $shoppingCart->amount();

        if (!$shoppingCart->isShippingFree()) {
            $total = $total + 100;
        }

        $request['value'] = $total;
        $request['currency'] = 'MXN';

        $url_redirect = $payment->handlePayment($request);
        return response()->json(['url_redirect'=>$url_redirect],201);
    }
    public function approval(Request $request)
    {

        $payment = resolve(PaypalService::class);

        $shoppingCartId = $request->shopping_cart_id;
        $shoppingCart = $this->getOrCreateShoppingCart($shoppingCartId);

        $transaction = $payment->handleApproval($request);

        $transactionCollect = collect($transaction);

        if ($transactionCollect['ok']) {

            //generar transaccion
            $newTransaction = Transaction::create([
                'transaccion_codigo'=>$transactionCollect['order_id'],
                'estatus'=>'activo',
                'metodo_pago_id'=>1
            ]);

            //generar orden
            $order = Order::create([
                'carrito_id'=>$shoppingCart->id,
                'total'=>$shoppingCart->amount(),
                'transaccion_id'=>$newTransaction->id
            ]);
            //terminar carrito
            $shoppingCart->estatus = 'inactivo';
            $shoppingCart->save();
            //regresar id orden
            return response()->json(
                [
                    'msg'=>'La orden fue generada correctamete',
                    'order_id'=>$order->id,
                    'transaction_id'=>$newTransaction->transaccion_codigo
                ]
            );

        }
    }
    public function show($id)
    {
        //
    }
    public function cancelled(Request $request)
    {
        //
    }
}
