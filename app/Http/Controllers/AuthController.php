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
    public function registerForm() {
        return view('auth.register');
    }
}
