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
            'basket'=>  ProductInShoppingCartResource::collection($this->products),
            'checkout'=>$this->when($this->amount() > 0 ,true,false),
            'shipping' => $this->when($this->amount() >= 2000 , 'free','$'.number_format(100,2,'.',',')),
            'total_with_shipping'=>$this->when($this->amount() >= 2000 , '0'  ,'$'.number_format($this->amount()+100,2,'.',','))
        ];
    }
}
