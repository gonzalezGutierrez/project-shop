<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\User;

class UserController extends Controller
{

    public function __construct() {

    }

    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(UserStoreRequest $request)
    {
        try{
            $user = new User();
            $response = $user->add($request->all());
            return response()->json($response,201);
        }catch(\Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }
    public function show($id)
    {
        //
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
