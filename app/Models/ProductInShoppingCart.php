<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInShoppingCart extends Model
{

    protected $table = 'product_in_shopping_carts';
    protected $primaryKey = 'id';
    protected $fillable = ['producto_id','cantidad','carrito_id','subtotal'];

    public function add($data) {
        return ProductInShoppingCart::create($data);
    }
    public function updateProductInBasket($shoppingCartId,$productId,$data) {
        return $this->isProductInBasket($shoppingCartId,$productId)->fill($data)->save();
    }
    public function isProductInBasket($shoppingCartId,$productId) {
        return $this->where([['producto_id',$productId],['carrito_id',$shoppingCartId]])->first();
    }

}
