<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestUpdate extends FormRequest
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
            'SKU'=>['required'],
            'precio_venta'=>['required'],
            'file'=>[''],
            'pdf'=>['required'],
            'descripcion'=>['required'],
            'especificaciones'=>['required'],
            'marca_id'=>['required'],
            'categoria_id'=>['required'],
        ];
    }
}
