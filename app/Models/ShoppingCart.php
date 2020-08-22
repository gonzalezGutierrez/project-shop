<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    public static function findOrCreateById($shopping_cart_id){
        
        if($shopping_cart_id){
            return ShoppingCart::find($shopping_cart_id);
        }else{
            return ShoppingCart::create();
        }
    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_in_shopping_carts','carrito_id','producto_id');
    }

    public function productsCount(){
        return $this->products()->count();
    }

    public function amount(){
        return $this->products()->sum("subtotal");
    }
}
