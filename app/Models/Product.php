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

    //CLASS'S METHODS
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
    public function add($data) {
        return Product::create($data);
    }

    //SCOPE METHODS
    public function scopeGetProductsSimilar($query,$productId,$brandId,$limit) {
        return $query->products()->getProductsLessProductId($productId)->getProductsWithBrandId($brandId)->limitWith($limit);
    }
    public function scopeGetProductsWithCategoryId($query,$categoryId) {
        return $query->products()->where('categoria_id',$categoryId);
    }
    public function scopeGetProductsWithBrandId($query,$brandId){
        return $query->where('marca_id',$brandId);
    }
    public function scopeGetLastProducts($query,$numberProducts){
        return $query->getWithStatus('activo')->orderBy('id','DESC')->limitWith($numberProducts);
    }
    public function scopeGetProductsLessProductId($query,$productId) {
        return $query->where('id','<>',$productId);
    }
    public function scopeLimitWith($query,$numberProducts) {
        return $query->take($numberProducts);
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

    //statis methods
    public static function setSlug($nameProduct) {
        return strtolower(Str::slug($nameProduct, '-'));
    }
    public static function findWithSlug($slug) {
        return Product::where('slug',$slug)->firstOrFail();
    }
    public static function getProductsWithMinStock($minStock) {
        return Product::where('existencia','<',$minStock);
    }

}
