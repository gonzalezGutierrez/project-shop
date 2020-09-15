<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MailOrder;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartUbication;
use App\Models\Transaction;
use App\Ubicacion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\This;

class OrderController extends Controller
{

    public function index(Request $request) {
        $orders = Order::get();
        return view('admin.orders.index',compact('orders'));
    }
    public function update(Request $request , $orderId) {
        try{
            $order = Order::findOrFail($orderId);
            $order->estatus = $request->estatus;
            $order->save();

            $shoppingCart = ShoppingCart::findOrFail($order->carrito_id);
            $user = User::findOrFail($shoppingCart->usuario_id);
            $transaction = Transaction::findOrFail($order->transaccion_id);

            $shippingUbaction = ShoppingCartUbication::where('carrito_id',$shoppingCart->id)->first();
            $ubication = Ubicacion::findOrFail($shippingUbaction->ubicacion_id);

            $products = $shoppingCart->products()->get();

            $data = array(
                'order'=>$order,
                'transaction'=>$transaction,
                'user'=>$user,
                'ubication'=>$ubication,
                'products'=>$products
            );

            //enviar la orden al correo electronico
            $mailOrder = new MailOrder($data);
            \Mail::to($user->email)->send($mailOrder);

            return back();
        }catch (\Exception $e) {
            return back();
        }
    }

    public function addInvoice(Request  $request ){



        try {

            $orderId = $request->order_id;
            $order = Order::findOrFail($orderId);

            if ($order->invoice) {
                $route_file_save = 'invoices/';
                $file = $request->file('file');
                $nameFile = 'invoice_order'.rand(1000,100000).'.'.$file->getClientOriginalExtension();
                \File::delete(public_path($order->invoice->url_archivo_factura));
                $file->move(public_path($route_file_save),$nameFile);
                $order->invoice->url_archivo_factura = $route_file_save.$nameFile;
                $order->invoice->save();
            } else {
                $route_file_save = 'invoices/';
                $file = $request->file('file');
                $nameFile = 'invoice_order'.rand(1000,100000).'.'.$file->getClientOriginalExtension();
                $file->move(public_path($route_file_save),$nameFile);
                $request['url_archivo_factura'] = $route_file_save.$nameFile;
                Invoice::create(['orden_id'=>$order->id,'url_archivo_factura'=>$request['url_archivo_factura']]);
            }

            return back();

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

}
