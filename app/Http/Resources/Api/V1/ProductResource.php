<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class ProductResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->nombre,
            'SKU'=>$this->SKU,
            'price_humans'=>'$'.number_format($this->precio_venta,2,'.',','),
            'price'=>$this->precio_venta,
            'slug'=>$this->slug,
            'url_main_image'=>Request::root().'/'.$this->url_imagen_principal,
            'category'=>[
                'id'=>$this->category->id,
                'name'=> $this->category->nombre,
                'slug'=>$this->category->slug
            ],
            'brand'=>[
                'id'=>$this->brand->id,
                'name'=>$this->brand->nombre
            ],
            'status_shop'=>$this->when($this->existencia > 0 ,'disponible','no disponible'),
            'especificaciones'=>$this->especificaciones,
            'descripcion'=>$this->descripcion
        ];
    }
}
