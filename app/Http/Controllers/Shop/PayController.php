<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ShoppingCart;
use App\Models\Transaction;
use App\Services\PaypalService;
use Illuminate\Http\Request;

class PayController extends Controller
{

    public function checkout(Request $request) {

        $shoppingCart = $request->shopping_cart;
        $products = $shoppingCart->products()->get();

        if ($products->count() == 0) {
            return redirect('/basket');
        }

        $total = $shoppingCart->amount();

        $shippingPrice = 0.0;
        if (!$shoppingCart->isShippingFree()  && $total > 0) {
            $shippingPrice = 100;
            $total = $total + $shippingPrice;
        }

        return view('shop.payments.checkout',compact('shoppingCart','total','products','shippingPrice'));

    }

    public function store(Request $request)
    {
        $payment = resolve(PaypalService::class);

        $shoppingCart = $request->shopping_cart;

        $total = $shoppingCart->amount();

        if (!$shoppingCart->isShippingFree()) {
            $total = $total + 100;
        }

        $request['value'] = $total;
        $request['currency'] = 'MXN';

        return $payment->handlePayment($request);
    }
    public function approval(Request $request)
    {

        $payment = resolve(PaypalService::class);

        $shoppingCart = $request->shopping_cart;

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

            $newShoppingCart = ShoppingCart::create();
            \Session::put('shopping_cart_id',$newShoppingCart->id);

            //regresar id orden
            return redirect('/')->with('success','Tu orden ha sido exitosa');

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
