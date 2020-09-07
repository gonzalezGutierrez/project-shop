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

            $subtotal = $request->cantidad * $product->precio_venta;
            $data = array('carrito_id'=>$shopping_cart->id,'producto_id'=>$product->id,'cantidad'=>$request->cantidad,'subtotal'=>$subtotal);

            if ($isProductInBasket) {
                $basket->updateProductInBasket($shopping_cart->id,$product->id,$data);
            }else{
                $basket->add($data);
            }
            return redirect('/basket');
        }catch (\Exception $e) {
            dd($e);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request  $request, $productId)
    {
        $shopping_cart = $request->shopping_cart;

        $product = Product::findOrFail($productId);
        $basket = new ProductInShoppingCart();

        $isProductInBasket = $basket->isProductInBasket($shopping_cart->id,$product->id);

        if ($isProductInBasket) {
            $isProductInBasket->delete();
            return back();
        }else {
            return back()->with('error','El producto no esta en el carrito');
        }


    }
}
