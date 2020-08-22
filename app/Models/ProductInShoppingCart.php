<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInShoppingCart extends Model
{

    protected $table = 'products_in_shopping_cart';
    protected $primaryKey = 'id';
    protected $fillable = ['producto_id','cantidad','carrito_id','subtotal'];

    public function add($data) {
        return ProductInShoppingCart::create($data);
    }

}
