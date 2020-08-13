<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion'];

    public function getProviders($status) {
        return $this->providers()->getByStatus($status)->get();
    }
    public function scopeProviders($query) {
        return $query->orderBy('id','desc');
    }
    public function scopeGetByStatus($query,$status) {
        return $query->where('estatus',$status);
    }
    public function add($data) {
        return Provider::create($data);
    }
    public function edit($data) {
        return $this->fill($data)->save();
    }
}
