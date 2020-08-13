<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialPrecio extends Model
{
    protected $table = 'historial_precios';
    protected $primaryKey = 'id';
    protected $fillable = ['precio','producto_id','proveedor_id'];

    //relations
    public function provider() {
        return $this->belongsTo(Provider::class,'proveedor_id');
    }

    public function add($data) {
        return HistorialPrecio::create($data);
    }
}
