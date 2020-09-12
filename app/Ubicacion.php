<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';
    protected $fillable = [
        'estado',
        'municipio',
        'calle',
        'n_interior',
        'n_exterior',
        'referencias',
        'colonia',
        'codigo_postal'
    ];

    public function add($data) {
        return $this->create($data);
    }
}
