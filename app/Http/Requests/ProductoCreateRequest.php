<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoCreateRequest extends FormRequest
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
            'stock'=>'required|min:5',
            'precio'=>'required|min:0.1'  
        ];
    }

    public function messages()
    {
        return $messages=[
            'stock.required'=>'Stock requerido',
            'stock.min'=>'Stock minimo 5',
            'precio.required'=>'Precio requerido',
            'precio.min'=>'Precio minimo 0.1€',
            
        ];
    }
}
