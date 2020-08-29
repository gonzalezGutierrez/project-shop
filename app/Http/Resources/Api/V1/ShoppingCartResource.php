<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ShoppingCartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'shopping_cart_id'=>$this->id,
            'total_products'=>$this->productsCount(),
            'total_humans'=>'$'.number_format($this->amount(),2,'.',','),
            'basket'=>  ProductInShoppingCartResource::collection($this->products)
        ];
    }
}
