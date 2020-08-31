<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UserAddRequest;
use App\Mail\MailRegister;
use App\Role;
use App\Token;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct() {
        $this->rol = new Role();
        $this->user = new User();
        $this->token = new Token();
    }

    public function loginForm() {
        return view('auth.login');
    }
    public function registerForm() {
        return view('auth.register');
    }
    public function login(Request  $request) {

        $credentials = $request->only(['email','password']);
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->userIsAdmin()) {
                return redirect('/administracion/productos');
            }

            if ($user->estatus == 'activo') {
                return redirect('/');
            }

            Auth::logout();

            return back();

        }else{
            return back();
        }

    }

    public function register(UserAddRequest  $request) {
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
            return response()->json(['user_data'=>$user]);

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
