<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{

    protected $fillable = [
        'nombre',
        'SKU',
        'slug',
        'precio_venta',
        'url_imagen_principal',
        'existencia',
        'caracteristicas',
        'descripcion',
        'especificaciones',
        'uso',
        'categoria_id',
        'marca_id'
    ];

    //relations
    public function brand() {
        return $this->belongsTo(Brand::class,'marca_id');
    }
    public function category() {
        return $this->belongsTo(Category::class,'categoria_id');
    }
    public function prices() {
        return $this->hasMany(HistorialPrecio::class,'producto_id');
    }
    public function buys() {
        return $this->hasMany(Buy::class,'producto_id');
    }
    public function totalBuys(){
        return $this->buys()->sum('gasto');
    }

    public function getProducts($status) {
        return $this->products()->getWithStatus($status)->get();
    }
    public function getProductsLike($like) {
        return $this->products()->getLike($like);
    }
    public function edit($data) {
        return $this->fill($data)->save();
    }
    public function setStock($amount) {
        return  $this->fill(['existencia'=>$amount])->save();
    }
    public function scopeProducts($query) {
        return $query->orderBy('id','desc');
    }
    public function scopeGetLike($query,$like) {
        return $query->where('nombre','LIKE',"{$like}");
    }
    public function scopeGetWithStatus( $query , $status ) {
        return $query->where('estatus',$status);
    }
    public function add($data) {
        return Product::create($data);
    }

    //statis methods
    public static function setSlug($nameProduct) {
        return strtolower(Str::slug($nameProduct, '-'));
    }
    public static function getProductsWithMinStock($minStock) {
        return Product::where('existencia','<',$minStock);
    }

}
