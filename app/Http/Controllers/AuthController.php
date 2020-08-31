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


    public function loginForm() {
        return view('auth.login');
    }
    public function login (Request $request) {

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->userIsAdmin()) {

                return redirect('/administracion/productos');

            }

            if ($user->estatus == 'activo') {
                return redirect('/');
            }

            return redirect('/login')->with('status_login','Tu cuenta esta inactiva');

        }

        return back();
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
