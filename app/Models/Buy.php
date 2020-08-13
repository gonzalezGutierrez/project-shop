<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table = 'buys';
    protected $primaryKey = 'id';

    protected $fillable = ['producto_id','proveedor_id','cantidad','gasto'];

    //relations
    public function provider() {
        return $this->belongsTo(Provider::class,'proveedor_id');
    }

    public function add($data) {
        return Buy::create($data);
    }
}
