<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{



    public function getRoleByName($name) {
        return Role::where('nombre',$name)->first();
    }

}
