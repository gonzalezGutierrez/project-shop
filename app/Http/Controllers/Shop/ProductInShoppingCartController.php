<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ProductInShoppingCart;
use Illuminate\Http\Request;

class ProductInShoppingCartController extends Controller
{

    public function __construct(){
        $this->productInShoppingCart = new ProductInShoppingCart();
    }

    public function store(Request $request)
    {
        try {
            $request['carrito_id'] = $request->shopping_cart->id;
            $this->productInShoppingCart->add($request->all());
            return dd("exit");
        }catch (\Exception $e) {
            dd();
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
