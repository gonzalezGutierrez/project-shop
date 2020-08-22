<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\RegisterCompletedRequest;
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
        $this->user = new User();
        $this->rol  = new Role();
        $this->token = new Token();
    }

    public function create()
    {
        //
    }

    public function store(UserAddRequest $request)
    {
        DB::beginTransaction();
        try {

            $customerRole = $this->rol->getRoleByName('cliente');

            $request['rol_id'] = $customerRole->id;

            $user = $this->user->add($request->all());

            $token = $this->token->getToken($user);

            $data = array('usuario'=>$user->id,'token'=>$token,'tipo'=>'registro');

            $token = $this->token->add($data);

            $mail = new MailRegister($user,$token->token);

            \Mail::to($user->email)->send($mail);

            DB::commit();

            return redirect('register-completed?token='.$token->token.'&userEmail='.$user->email);

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }

    public function registerCompleted(RegisterCompletedRequest  $request) {
        $token = $request->token;
        $userEmail = $request->userEmail;

        $user = $this->user->getUserWithEmail($userEmail);

        $tokenAuthorizate = $this->token->getTokenWithTokenAndUser($user,$token);

        if ($user && $tokenAuthorizate) {
            return view('shop.auth.register-completed',compact('user'));
        }

        return redirect('/');

    }

    public function activateAccount(RegisterCompletedRequest $request) {

        $token = $request->token;
        $userEmail = $request->userEmail;

        $user = $this->user->getUserWithEmail($userEmail);


        $tokenAuthorizate = $this->token->getTokenWithTokenAndUser($user,$token);

        if ($user && $tokenAuthorizate) {

            $user->estatus = 'activo';
            $user->save();

            $tokenAuthorizate->delete();

            Auth::login($user);

            return view('shop.users.user-active-successfuly',compact('user'));

        }
        return redirect('/');
    }

    public function show($id)
    {
        $user = Auth::user();
        return view('shop.users.profile',compact('user'));
    }

    public function edit($id)
    {
        //
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
