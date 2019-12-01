<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'phone' => 'required|regex:/[0-9]{8}/',
            'email'=>'required:email',
            'message'=>'required|min:10'
        ];
    }

    public function messages(){
        return [ 
            'name.required' => 'El nombre es obligatorio',
            'name.min'=>'La longitud de nombre tiene que ser mayor a 2',
            'name.max'=>'La longitud de nombre tiene que ser menor a 20',

            'phone.required'=>'El telefono es obligatorio',
            'phone.regex'=>'El telefono no tiene el formato adecuado',

            'email.required'=>'El email es obligatorio',
            'email.email'=>'El email esta mal introducido',

            'message.required'=>'El mensage es obligatorio',
            'message.min'=>'La longitud del mensage debe ser mayora 10'

        ];
    }
}
