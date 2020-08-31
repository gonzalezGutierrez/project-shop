<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
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
}
