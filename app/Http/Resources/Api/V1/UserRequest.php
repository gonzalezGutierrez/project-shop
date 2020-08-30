<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserRequest extends JsonResource
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
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'email'=>$this->email,
            'date_register'=>$this->created_at,
            'phone'=>$this->telefono
        ];
    }
}
