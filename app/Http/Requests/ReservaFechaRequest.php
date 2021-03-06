<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaFechaRequest extends FormRequest
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
          'tipo' => 'required'
        ];
    }
    public function messages()
    {
        return $messages = [
          'fecha.required' => 'Fecha Requerida',
          'fecha.date' => 'Fecha tipo fecha',
          'fecha.after' => 'La fecha debe ser despues de hoy, futuro',
          'tipo.required' => 'Tipo requerido',
        ];
    }
}
