<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;

class User extends Authenticatable
{
    use  Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','email','telefono','password','rol_id','estatus'];
    protected $hidden = ['password', 'remember_token'];

    public function rol() {
        return $this->belongsTo(Role::class);
    }
    public function userIsAdmin() {
        $rol = $this->rol()->first();
        if ($rol->nombre == 'administrador') {
            return true;
        }
        return false;
    }

    //hocks when there is a record these methods will be executed
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function add($request) {
        return User::create($request);
    }
    public function getCustomers() {
        return $this->where('rol_id',3);
    }
    public function getUserWithEmail($email) {
        return User::where('email',$email)->first();
    }
    public function getUserWithId($id) {
        return $this->findOrFail($id);
    }
    public function getAccessToken()
    {
        return $this->generateToken()->accessToken;
    }
    public function generateToken()
    {
        return $this->createToken('user_token_data');
    }



}
