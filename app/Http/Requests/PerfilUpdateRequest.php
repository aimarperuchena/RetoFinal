<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilUpdateRequest extends FormRequest
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
          'nombre' => ['required', 'string', 'max:255','min:2'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'telefono'=>['required','integer','regex:/[0-9]{9}/'],
          'apellido'=>['required','string','max:255','min:2']
        ];
    }
    public function messages()
    {
        return $messages=[
          'nombre.required'=>'Nombre requerido.',
          'nombre.string'=>'El nombre no es tipo string.',
          'nombre.max'=>'Nombre demasiado grande.',
          'nombre.min'=>'El nombre tiene que contener al menos 2 letras..',
          'email.required'=>'Email requerido.',
          'email.string'=>'El nombre no es tipo string.',
          'email.email'=>'Email introducido inválido.',
          'email.max'=>'Email demasiado grande.',
          'password.required'=>'Contraseña requerida.',
          'password.string'=>'La contraseña no es tipo string.',
          'password.min'=>'La contraseña debe contener mínimo 8 carácteres..',
          'password.confirmed'=>'La contraseña no coincide.',
          'telefono.required'=>'Teléfono requerido.',
          'telefono.integer'=>'El teléfono debe ser números.',
          'telefono.regex'=>'El teléfono es incorrecto.',
          'apellido.required'=>'Apellido requerido.',
          'apellido.string'=>'El apellido no es tipo string.',
          'apellido.max'=>'Apellido demasiado grande.',
          'apellido.min'=>'El apellido tiene que contener al menos 2 letras..',

        ];
    }

}
