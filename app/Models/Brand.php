<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected  $table = 'brands';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion'];

    public function getBrands($status) {
        return  $this->brands()->getWithStatus($status)->get();
    }
    public function scopeBrands($query) {
        return $query->orderBy('id','desc');
    }
    public function scopeGetWithStatus($query,$status) {
        return $query->where('estatus',$status);
    }

    public function add($data) {
        return Brand::create($data);
    }
    public function edit($data) {
        return $this->fill($data)->save();
    }
}
