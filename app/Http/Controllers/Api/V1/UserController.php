<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\RegisterCompletedRequest;
use App\Mail\MailRegister;
use App\Role;
use App\Token;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct() {
        $this->user = new User();
        $this->rol  = new Role();
        $this->token = new Token();
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->all()['user'];

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
            return $e;
        }
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

            return response()->json(['msg'=>'Tu cuenta ha sido activada correctamente'],200);
        }
        return response()->json(['msg'=>'Hubo un error al activar tu cuenta , el token de activación es incorrecto o ha caducado']);
    }
    public function show($id)
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
