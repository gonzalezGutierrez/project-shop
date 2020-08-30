<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\LoginRequest;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (LoginRequest  $request){

        $credentials = $request->only(['email','password']);
        $shopping_cart_id = $request->shopping_cart_id;
        $shopping_cart = new ShoppingCart();
        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->estatus == 'activo') {

                $userHasShoppingCart = $shopping_cart->getShoppingCartWithUserId($user->id,$shopping_cart_id);

                if (!$userHasShoppingCart) {
                    $shopping_cart->setUserToShoppingCart($user->id,$shopping_cart_id);
                }

                $token = $user->getAccessToken();

                return response()->json(['token'=>'Bearer '.$token,'account'=>'active'],200);

            }else{
                return response()->json(['msg'=>'Tu cuenta no esta activa','account'=>'inactive'],401);
            }
        }else{
            return response()->json(['msg'=>'Credenciales incorrectas','account'=>'false'],401);
        }

    }
}
