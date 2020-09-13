<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['carrito_id','total','transaccion_id'];

    public function shoppingCart() {
        return $this->belongsTo(ShoppingCart::class,'carrito_id');
    }
    public function transaction() {
        return $this->belongsTo(Transaction::class,'transaccion_id');
    }
}
