<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Token extends Model
{


    protected $table = 'tokens';
    protected $fillable = ['usuario','token','tipo'];

    public function add($data) {
        return Token::create($data);
    }

    public function getToken($user){
        return Str::random(35).$user->id;
    }
    public function getTokenWithTokenAndUser($user,$token) {
        return  Token::where([['token',$token],['usuario',$user->id]])->first();
    }


}
