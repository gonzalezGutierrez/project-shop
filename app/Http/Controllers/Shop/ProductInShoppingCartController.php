<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductInShoppingCart;
use Illuminate\Http\Request;

class ProductInShoppingCartController extends Controller
{

    public function __construct(){
        $this->productInShoppingCart = new ProductInShoppingCart();
        $this->middleware('set_shopping_cart');
    }

    public function store(Request $request)
    {
        try {
            $shopping_cart_id = $request->shopping_cart_id;
            $shopping_cart = $request->shopping_cart;

            $basket = new ProductInShoppingCart();

            $product = Product::findOrFail($request->producto_id);

            $isProductInBasket = $basket->isProductInBasket($shopping_cart->id,$product->id);

            $subtotal = $request->amount * $product->precio_venta;
            $data = array('carrito_id'=>$shopping_cart->id,'producto_id'=>$product->id,'cantidad'=>$request->cantidad,'subtotal'=>$subtotal);

            if ($isProductInBasket) {
                $basket->updateProductInBasket($shopping_cart->id,$product->id,$data);
            }else{
                $basket->add($data);
            }
            return redirect('/shopping-cart');
        }catch (\Exception $e) {
            dd($e);
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
