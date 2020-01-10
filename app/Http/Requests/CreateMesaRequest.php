<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMesaRequest extends FormRequest
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
            'nombre'=>'required',
            'capacidad'=>'required|min:2'

        ];
    }

    public function messages()
    {   
        return $messages=[
            'nombre.required'=>'Nombre requerido',
            'capacidad.required'=>'Capacidad requerida',
            'capacidad.min'=>'Capacidad minima 2',
            
        ];
    }
}
