<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shop\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function access(Request $request) {
        return view('shop.auth.login');
    }
    public function login(Request  $request) {

        $credentials = $request->only(['email','password']);

        if ( Auth::attempt($credentials) ) {

            return redirect('/');
        }
        return back()->withErrors(['email'=>trans('auth.failed')])->withInput();

    }


}
