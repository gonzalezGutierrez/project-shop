<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = 'categories';
    protected  $guarded = [];

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

    public function  add($data) {
        return Category::create($data);
    }
    public function edit($data) {
        return $this->fill($data)->save();
    }
    public function getCategoryWithId($id) {
        return $this->findOrFail($id);
    }
}
