<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UbicationUser extends Model
{

    protected $table = 'ubication_users';
    protected $fillable = ['usuario_id','ubicacion_id'];

    public function add($data) {
        return $this->create($data);
    }

}
