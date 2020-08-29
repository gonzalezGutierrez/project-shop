<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','email','telefono','password','rol_id'];
    protected $hidden = ['password', 'remember_token'];

    public function rol() {
        return $this->belongsTo(Role::class);
    }

    //hocks when there is a record these methods will be executed

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function add($request) {
        return User::create($request);
    }

    public function getUserWithEmail($email) {
        return User::where('email',$email)->first();
    }



}
