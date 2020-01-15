<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class admin_reserva_create extends FormRequest
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
            'fecha' => 'required|date|after:today',
            'personas' => 'required|integer|min:2',
        ];
    }

    public function messages(){
        return [ 
            'fecha.required' => 'Fecha Requerida',
            'fecha.date' => 'Fecha tipo fecha',
            'fecha.after' => 'La fecha debe ser despues de hoy, futuro',
            'personas.required' => 'Personas Requeridas',

            'personas.integer' => 'Personas es numérico',

            'personas.min' => 'Minimo 2 personas',

        

        ];
    }
}
