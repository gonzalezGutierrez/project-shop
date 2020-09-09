<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>['required'],
            'SKU'=>['required','unique:products,SKU'],
            'precio_venta'=>['required'],
            'precio'=>['required'],
            'file'=>['required'],
            'pdf'=>['required'],
            'existencia'=>['required'],
            'caracteristicas'=>[''],
            'descripcion'=>['required'],
            'especificaciones'=>['required'],
            'marca_id'=>['required'],
            'categoria_id'=>['required'],
            'proveedor_id'=>['required']
        ];
    }
}
