<?php

namespace App\Http\Controllers\Admin;

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
            return $user->rol();
            if ($user->userIsAdmin()) {
                return redirect('/');
            }

            Auth::logout();

            return back();

        }else{
            return back();
        }

    }
}
