<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'apellido_paterno'=>['required'],
            'apellido_materno'=>['required'],
            'email'=>['required','unique:users,email'],
            'password'=>['required','min:8'],
            'telefono'=>['required','min:10'],
            'password_confirmation' => 'required_with:password|same:password|min:8'
        ];
    }
}
