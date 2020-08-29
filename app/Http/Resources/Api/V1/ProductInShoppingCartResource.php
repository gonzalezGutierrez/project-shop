<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class ProductInShoppingCartResource extends JsonResource
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
            'amount'=>$this->amount,
            'product_name'=>$this->product_name,
            'subtotal'=>'$'.number_format($this->subtotal,2,'.',','),
            'product_image'=>Request::root().'/'.$this->product_image,
            'product_price_sale'=>'$'.number_format($this->product_price,2,'.',','),
            'product_slug'=>$this->product_slug
        ];
    }
}
