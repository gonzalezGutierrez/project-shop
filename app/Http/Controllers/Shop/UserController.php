<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UserAddRequest;
use App\Mail\MailRegister;
use App\Role;
use App\Token;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct() {
        $this->rol = new Role();
        $this->user = new User();
        $this->token = new Token();

        $this->middleware('guest')->only('create');
    }

    public function create(){
        return view('auth.register');
    }
    public function show() {
        $user = Auth::user();
        return view('shop.users.show',compact('user'));
    }
    public function edit($id)
    {
        //
    }




    public function store(UserAddRequest $request) {

        DB::beginTransaction();

        try {

            $data = $request->all();

            $customerRole = $this->rol->getRoleByName('cliente');

            $data['rol_id'] = $customerRole->id;

            $user = $this->user->add($data);

            $token = $this->token->getToken($user);

            $data = array('usuario'=>$user->id,'token'=>$token,'tipo'=>'registro');

            $token = $this->token->add($data);

            $mail = new MailRegister($user,$token->token);

            \Mail::to($user->email)->send($mail);

            DB::commit();

            return redirect('/user-registered-successfuly/'.$token->token.'/'.$user->email);


        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }

    }
    public function registeredOk($token,$email) {
        $user = $this->user->getUserWithEmail($email);
        $tokenUser = $this->token->getTokenWithTokenAndUser($user,$token);

        if ($user && $tokenUser) {
            return view('auth.user-create-successfuly',compact('user'));
        }

        return back()->with('session-toke-caducate','El token no es correcto o ha caducado');
    }
    public function activateUser ($token,$email) {
        $user = $this->user->getUserWithEmail($email);
        $tokenUser = $this->token->getTokenWithTokenAndUser($user,$token);

        if ($user && $tokenUser) {
            $tokenUser->delete();
            Auth::loginUsingId($user->id);
            $user->estatus = 'activo';
            $user->save();
            return view('auth.user-activate-successfuly',compact('user'));
        }

        return back()->with('session-toke-caducate','El token no es correcto o ha caducado');
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
