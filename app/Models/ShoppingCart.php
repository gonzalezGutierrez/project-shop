<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ['usuario_id'];

    public function customer() {
        return $this->belongsTo(User::class,'usuario_id');
    }
    public function ubication() {
        return $this->hasOne(ShoppingCartUbication::class,'carrito_id');
    }

    public static function findOrCreateById($shopping_cart_id){

        if($shopping_cart_id){
            return ShoppingCart::find($shopping_cart_id);
        }else{
            return ShoppingCart::create();
        }
    }
    public  function getShoppingCartWithUserId($userId,$shoppingCartId) {
        return ShoppingCart::where([['usuario_id',$userId],['id',$shoppingCartId]])->first();
    }
    public function setUserToShoppingCart($userId,$shoppingCartId) {
        return $this->findOrFail($shoppingCartId)->fill(['usuario_id'=>$userId])->save();
    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_in_shopping_carts','carrito_id','producto_id')->select(
                'products.id as product_id',
                'products.url_imagen_principal as product_image',
                'products.nombre as product_name',
                'products.existencia as product_stock',
                'products.precio_venta as product_price',
                'products.slug as product_slug',
                'product_in_shopping_carts.cantidad as amount',
                'product_in_shopping_carts.subtotal',
                'products.url_imagen_principal as product_image'
            );
    }

    public function productsCount(){
        return $this->products()->count();
    }
    public function amount(){
        return $this->products()->sum("subtotal");
    }
    public function isShippingFree() {
        $total = $this->amount();
        if ($total > 2000) {
            return true;
        }
        return false;
    }
}
