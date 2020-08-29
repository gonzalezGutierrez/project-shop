<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductsCollection;
use App\Http\Resources\Api\V1\ShoppingCartResource;
use App\Models\Product;
use App\Models\ProductInShoppingCart;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function __construct()
    {

    }

    public function getOrCreateShoppingCart($shopping_cart_id) {
        return ShoppingCart::findOrCreateById($shopping_cart_id);
    }

    public function store(Request $request) {
        $shopping_cart_id = $request->shopping_cart_id;
        $shopping_cart = $this->getOrCreateShoppingCart($shopping_cart_id);
        if (!$shopping_cart) {
            $shopping_cart = ShoppingCart::create();
        }
        ShoppingCartResource::wrap('shopping_cart');
        return new ShoppingCartResource($shopping_cart);
    }
    public function products(Request $request) {

        $shopping_cart_id = $request->shopping_cart_id;
        $shopping_cart = $this->getOrCreateShoppingCart($shopping_cart_id);

        ShoppingCartResource::wrap('shopping_cart');
        return new ShoppingCartResource($shopping_cart);
    }
    public function addToShoppingCart(Request  $request) {

        try {

            $shopping_cart_id = $request->shopping_cart_id;
            $shopping_cart = $this->getOrCreateShoppingCart($shopping_cart_id);

            $basket = new ProductInShoppingCart();

            $product = Product::findOrFail($request->product_id);

            $isProductInBasket = $basket->isProductInBasket($shopping_cart->id,$product->id);

            $subtotal = $request->amount * $product->precio_venta;
            $data = array('carrito_id'=>$shopping_cart->id,'producto_id'=>$request->product_id,'cantidad'=>$request->amount,'subtotal'=>$subtotal);

            if ($isProductInBasket) {
                $basket->updateProductInBasket($shopping_cart->id,$product->id,$data);
            }else{
                $basket->add($data);
            }
            return response()->json(['msg'=>'El producto fue agregado al carrito correctamente'],201);
        }catch (\Exception $e){
            return response()->json(['msg'=>$e->getMessage()],500);
        }
    }

}
