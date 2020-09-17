<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
    protected $table = 'news';
    protected $fillable = ['titulo','encabezado','descripcion','slug','estatus','url_image_news'];

    public function add($data) {
        return $this->create($data);
    }
    public function getActives() {
        return $this->orderBy('created_at','desc')->where('estatus',true);
    }

    //statis methods
    public static function setSlug($slug) {
        return strtolower(Str::slug($slug, '-'));
    }

}
