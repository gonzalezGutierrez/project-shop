<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class UbicationRequest extends FormRequest
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
            'estado'=>['required'],
            'municipio'=>['required'],
            'calle'=>['required'],
            'n_interior'=>[''],
            'n_exterior'=>['required'],
            'referencias'=>[''],
            'colonia'=>['required'],
            'codigo_postal'=>['required']
        ];
    }
}
