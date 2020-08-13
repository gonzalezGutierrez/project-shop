<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{



    public function getNameRoleCustomer() {
        return Role::where('nombre','cliente')->first()->nombre;
    }

}
