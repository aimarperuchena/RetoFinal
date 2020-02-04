<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineaRequest extends FormRequest
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
            'unidades'=>'required|integer|min:1',
           
        ];
    }

    public function messages()
    {
        return $messages=[
            'unidades.required'=>'Unidad Requerida',
            'unidades.integer'=>'Valor Numérico',
            'unidades.min'=>'Mínimo una unidad',
            
        ];
    }
}
