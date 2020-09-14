<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UbicationRequest;
use App\Mail\MailOrder;
use App\Models\Order;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartUbication;
use App\Models\Transaction;
use App\Models\UbicationUser;
use App\Services\PaypalService;
use App\Ubicacion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
{

    public function __construct()
    {
        $this->middleware('set_shopping_cart');
    }

    public function checkout(Request $request) {

        $user = Auth::user();

        $ubications = Ubicacion::join('ubication_users','ubicaciones.id','ubication_users.ubicacion_id')
            ->where('ubication_users.usuario_id',$user->id)
            ->select('ubicaciones.*')
            ->orderBy('ubicaciones.id','desc')
            ->get();

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

        return view('shop.payments.checkout',compact('shoppingCart','total','products','shippingPrice','ubications'));

    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        $user = Auth::user();

        $ubicationId = $request->ubication_id;
        $shippingUbication = null;

        if ($ubicationId == null) {

            $validatedData = $request->validate([
                'estado'=>['required'],
                'municipio'=>['required'],
                'calle'=>['required'],
                'n_interior'=>[''],
                'n_exterior'=>['required'],
                'referencias'=>['max:200'],
                'colonia'=>['required'],
                'codigo_postal'=>['required']
            ]);

            $ubication = new Ubicacion();
            $newUbication = $ubication->add($request->all());

            $ubicationUser = new UbicationUser();
            $ubicationUser->add(['usuario_id'=>$user->id,'ubicacion_id'=>$newUbication->id]);
            $shippingUbication = $newUbication->id;

        }else {

            $ubication = Ubicacion::findOrFail($ubicationId);

            if (!$ubication) {
                return back()->with('ubication','La dirección es incorrecta');
            }

            $shippingUbication = $ubication->id;
        }


        try {

            $payment = resolve(PaypalService::class);

            $shoppingCart = $request->shopping_cart;

            $shoppingCart->usuario_id = $user->id;
            $shoppingCart->save();

            $total = $shoppingCart->amount();

            if (!$shoppingCart->isShippingFree()) {
                $total = $total + 100;
            }

            $request['value'] = $total;
            $request['currency'] = 'MXN';

            $setShippingUbication = new ShoppingCartUbication();
            $setShippingUbication->add(['carrito_id'=>$shoppingCart->id,'ubicacion_id'=>$shippingUbication]);

            DB::commit();

            if (boolval($request->facturar)) {
                \Session::put('facturar',true);
            }else{
                \Session::put('facturar',false);
            }

            return $payment->handlePayment($request);

        }catch (\Exception $exception){
            DB::rollBack();
            return back();
        }
    }
    public function approval(Request $request)
    {

        DB::beginTransaction();

        try {
            $payment = resolve(PaypalService::class);

            $shoppingCart = $request->shopping_cart;
            $user = User::findOrFail($shoppingCart->usuario_id);

            $total = $shoppingCart->amount();

            if (!$shoppingCart->isShippingFree()) {
                $total = $total + 100;
            }

            $transaction = $payment->handleApproval($request);

            $transactionCollect = collect($transaction);

            if ($transactionCollect['ok']) {

                //generar transaccion
                $newTransaction = Transaction::create([
                    'transaccion_codigo' => $transactionCollect['order_id'],
                    'estatus' => 'activo',
                    'metodo_pago_id' => 1
                ]);

                $facturar = \Session::get('facturar');


                //generar orden
                $order = Order::create([
                    'carrito_id' => $shoppingCart->id,
                    'total' => $total,
                    'transaccion_id' => $newTransaction->id,
                    'facturar'=> $facturar
                ]);

                $shippingUbaction = ShoppingCartUbication::where('carrito_id',$shoppingCart->id)->first();
                $ubication = Ubicacion::findOrFail($shippingUbaction->ubicacion_id);

                $products = $shoppingCart->products()->get();

                $data = array(
                    'order'=>$order,
                    'transaction'=>$newTransaction,
                    'user'=>$user,
                    'ubication'=>$ubication,
                    'products'=>$products
                );

                //enviar la orden al correo electronico
                $mailOrder = new MailOrder($data);
                \Mail::to(Auth::user()->email)->send($mailOrder);


                //terminar carrito
                $shoppingCart->estatus = 'inactivo';
                $shoppingCart->save();

                $newShoppingCart = ShoppingCart::create();
                \Session::put('shopping_cart_id', $newShoppingCart->id);

                DB::commit();

                \Session::remove('facturar');

                return redirect('/order-success/' . $newTransaction->transaccion_codigo)->with('success', 'Tu orden ha sido exitosa');
            }
        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
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
