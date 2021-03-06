<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['transaccion_codigo','estatus','metodo_pago_id'];

    public function paymentMethod() {
        return $this->belongsTo(PaymentMethod::class,'metodo_pago_id');
    }
}
