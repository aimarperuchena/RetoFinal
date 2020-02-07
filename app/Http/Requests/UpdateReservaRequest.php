<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
       return [
         'personas' => 'required|integer|min:2',
         'mesa' => 'required'
         'fecha' => 'required|date|after:today',
         'tipo' => 'required'
       ];
     }
     public function messages()
     {
         return $messages = [
           'personas.required' => 'Personas Requeridas',
           'personas.integer' => 'Personas es numérico',
           'personas.min' => 'Minimo 2 personas',
           'mesa.required' => 'Mesa requerido',
           'fecha.required' => 'Fecha Requerida',
           'fecha.date' => 'Fecha tipo fecha',
           'fecha.after' => 'La fecha debe ser despues de hoy, futuro',
           'tipo.required' => 'Tipo requerido',
         ];
     }
}
