<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'last_name'=>$this->apellido,
            'email'=>$this->email,
            'date_register'=>$this->created_at,
            'phone'=>$this->telefono
        ];
    }
}
