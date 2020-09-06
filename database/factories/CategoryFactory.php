<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;


$factory->define(Category::class, function (Faker $faker) {

    $images = ['c1.jpg','c2.jpg','c3.jpg','c4.jpg','c5.jpg','c6.jpg','c7.jpg','c8.jfif','c9.jpg'];

    return [
        'nombre'=>$faker->name,
        'url_imagen'=>'images/categories/'.$images[rand(0,8)],
        'slug'=>strtolower(Str::slug($faker->name, '-'))
    ];
});
