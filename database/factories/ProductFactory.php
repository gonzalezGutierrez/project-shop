<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $images = ['p1.jpg','p2.jpg','p3.jfif','p4.jpg','p5.jpg','p6.jpg','p7.jpg','p8.jpg','p9.jpg'];
    $categories = \App\Models\Category::all();
    $brands     = \App\Models\Brand::all();
    return [
        'nombre'=>$faker->name,
        'url_imagen_principal'=>'images/products/'.$images[rand(0,8)],
        'slug'=>strtolower(Str::slug($faker->name, '-')),
        'SKU'=>$faker->randomNumber(6),
        'precio_venta'=>$faker->randomNumber(2),
        'existencia'=>$faker->randomNumber(1),
        'categoria_id'=>$categories->random(),
        'descripcion'=>$faker->text,
        'uso'=>$faker->text,
        'caracteristicas'=>$faker->text,
        'marca_id'=>$brands->random(),
        'estatus'=>'activo'
    ];
});
