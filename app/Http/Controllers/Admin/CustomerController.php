<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Ubicacion;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function __construct() {
        $this->customer = new User();
    }

    public function index()
    {
        $customers = $this->customer->getCustomers()->get();
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request  $request)
    {

        $transaccion = $request->code_order;

        $customer = $this->customer->getUserWithId($id);
        $ubications = Ubicacion::join('ubication_users','ubicaciones.id','ubication_users.ubicacion_id')
            ->where('ubication_users.usuario_id',$customer->id)
            ->select('ubicaciones.*')
            ->orderBy('ubicaciones.id','desc')
            ->get();

        $orders = null;

        if (!$transaccion) {
            $orders = Order::join('shopping_carts','orders.carrito_id','shopping_carts.id')
                ->join('transactions','orders.transaccion_id','transactions.id')
                ->where('shopping_carts.usuario_id',$customer->id)
                ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
                ->orderBy('orders.id','desc')
                ->paginate();
        }else {
            $orders = Order::join('shopping_carts','orders.carrito_id','shopping_carts.id')
                ->join('transactions','orders.transaccion_id','transactions.id')
                ->where('shopping_carts.usuario_id',$customer->id)
                ->where('transactions.transaccion_codigo',$transaccion)
                ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
                ->orderBy('orders.id','desc')
                ->paginate();
        }

        return view('admin.customers.show',compact('customer','ubications','orders','transaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
