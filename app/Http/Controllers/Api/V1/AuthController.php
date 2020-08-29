<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (Request  $request){

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->estatus == 'activo') {
                return response()->json(['token'=>'token_user','account'=>'active'],200);
            }else{
                return response()->json(['msg'=>'Tu cuenta no esta activa','account'=>'inactive'],401);
            }
        }else{
            return response()->json(['msg'=>'Credenciales incorrectas','account'=>'false'],401);
        }

    }
}
