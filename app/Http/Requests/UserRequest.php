<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'email' => 'required|email',
            'password' => 'required|min:10'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min'=>'La longitud de nombre tiene que ser mayor a 2',
            'name.max'=>'La longitud de nombre tiene que ser menor a 20',
            'email.required'=>'El email es obligatorio',
            'email.email'=>'El email esta mal introducido',
            'password.min'=>'La contraseña debe tener un minimo de 10 caracteres',
            'password.required'=>'La contraseña es obligatoria'
        ];
    }
}
