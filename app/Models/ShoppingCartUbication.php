<?php

namespace App\Models;

use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartUbication extends Model
{

    protected $table = 'shopping_cart_ubication';
    protected $fillable = ['carrito_id','ubicacion_id'];

    public function ubication() {
        return $this->belongsTo(Ubicacion::class,'ubicacion_id');
    }
    public function add($data) {
        return $this->create($data);
    }
}
