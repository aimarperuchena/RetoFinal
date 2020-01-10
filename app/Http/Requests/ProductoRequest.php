<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
        'nombre' => 'required|min:3|max:20',
        'descripcion' => 'required|min:3|max:50',
        ];
    }

    public function messages()
{
    return [
        'nombre.required' => 'Nombre requerido',
        'descripcion.required'  => 'Descripcion requerida',
        'nombre.min' => 'Minimo 3 caracteres',
        'descripcion.min'  => 'Minimo 3 caracteres',
        'nombre.max' => 'Maximo 20 caracteres',
        'descripcion.max'  => 'Maximo 50 caracteres',
    ];

    }
}
