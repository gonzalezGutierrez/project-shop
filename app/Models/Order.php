<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['carrito_id','total','transaccion_id','facturar'];

    public function shoppingCart() {
        return $this->belongsTo(ShoppingCart::class,'carrito_id');
    }
    public function transaction() {
        return $this->belongsTo(Transaction::class,'transaccion_id');
    }
    public function invoice() {
        return $this->hasOne(Invoice::class,'orden_id');
    }
}
