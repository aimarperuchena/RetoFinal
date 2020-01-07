<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SociedadUpdateRequest extends FormRequest
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
            'nombre'=>'required|min:4',
            'ubicacion'=>'required|min:4',
            'telefono'=>'required|integer|regex:/[0-9]{9}/'

        ];
    }

    public function messages()
    {
        return $messages = [
            'nombre.required' => 'Nombre requerido',
            'nombre.min' => 'Longitud mínima del nombre 4',
            'ubicacion.required' => 'Ubicación requerida',
            'ubicación.min' => 'Longitud mínima ubicación 4',
            'telefono.required'=>'Teléfono requerido',
            'telefono.integer'=>'El teléfono es numérico',
            'telefono.size'=>'La longitud del teléfono es 9'
        ];
    }
}
