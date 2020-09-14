<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UserAddRequest;
use App\Mail\MailRegister;
use App\Models\Order;
use App\Role;
use App\Token;
use App\Ubicacion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function __construct() {
        $this->customer = new User();
        $this->token = new Token();
        $this->rol = new Role();
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
        $customer = new User();
        return view('admin.customers.create',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();

            $customerRole = $this->rol->getRoleByName('cliente');

            $data['rol_id'] = $customerRole->id;

            $user = $this->customer->add($data);

            $token = $this->token->getToken($user);

            $data = array('usuario'=>$user->id,'token'=>$token,'tipo'=>'registro');

            $token = $this->token->add($data);

            $mail = new MailRegister($user,$token->token);
            \Mail::to($user->email)->send($mail);

            DB::commit();
            return redirect('administracion/clientes/'.$user->id);
        }catch (\Exception $exception){
            DB::rollBack();
            dd($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request  $request)
    {

        $customer = $this->customer->getUserWithId($id);
        $ubications = Ubicacion::join('ubication_users','ubicaciones.id','ubication_users.ubicacion_id')
            ->where('ubication_users.usuario_id',$customer->id)
            ->select('ubicaciones.*')
            ->orderBy('ubicaciones.id','desc')
            ->get();

        $orders = Order::join('shopping_carts','orders.carrito_id','shopping_carts.id')
            ->join('transactions','orders.transaccion_id','transactions.id')
            ->where('shopping_carts.usuario_id',$customer->id)
            ->select('orders.id', 'orders.total', 'orders.created_at', 'orders.estatus','orders.facturar','transactions.transaccion_codigo')
            ->orderBy('orders.id','desc')
            ->get();

        return view('admin.customers.show',compact('customer','ubications','orders'));
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
        try {
            $customer = $this->customer->getUserWithId($id);
            $customer->fill($request->all())->save();
            return back();
        }catch (\Exception $exception){

        }
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
