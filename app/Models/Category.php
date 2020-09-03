<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected  $table = 'categories';
    protected  $fillable = ['nombre','url_imagen','slug'];

    public function products() {
        return $this->hasMany(Product::class,'categoria_id');
    }
    public function productsCount() {
        return $this->products()->count();
    }

    public function getAll($like,$status) {
        return $this->getWithLike($like)->getWithStatus($status)->orderByWith('id','desc')->get();
    }
    public function scopeGetWithLike($query,$like) {
        return $like != null ? $query->where('nombre','LIKE',"%{$like}%") : null;
    }
    public function scopeGetWithStatus($query,$status) {
        return $status != null ? $query->where('estatus',$status) : $query->where('estatus','activo');
    }
    public function scopeOrderByWith($query,$property,$descOrAsc) {
        return $query->orderBy($property,$descOrAsc);
    }
    public function scopeGetCategoriesLess($query,$categoryId) {
        return $query->where('id','<>',$categoryId);
    }

    public function  add($data) {
        return Category::create($data);
    }
    public function edit($data) {
        return $this->fill($data)->save();
    }
    public function getCategoryWithId($id) {
        return $this->find($id);
    }


    //statis functions
    public static function setSlug($categoryName) {
        return strtolower(Str::slug($categoryName, '-'));
    }
    public static function findWithSlug($slug) {
        return Category::where('slug',$slug)->first();
    }
}
