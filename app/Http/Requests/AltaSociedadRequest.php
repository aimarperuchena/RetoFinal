<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AltaSociedadRequest extends FormRequest
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
          'ubicacion' => ['required', 'string', 'min:2', 'max:255'],
          'image' => ['required'],
          'telefono'=>['required','integer','regex:/[0-9]{9}/'],
        ];
    }
    public function messages()
    {
        return $messages=[
          'nombre.required'=>'Nombre requerido.',
          'nombre.string'=>'El nombre no es tipo string.',
          'nombre.max'=>'Nombre demasiado grande.',
          'nombre.min'=>'El nombre tiene que contener al menos 2 letras..',
          'telefono.required'=>'Teléfono requerido.',
          'telefono.integer'=>'El teléfono debe ser números.',
          'telefono.regex'=>'El teléfono es incorrecto.',
          'ubicacion.required'=>'Ubicación requerida.',
          'ubicacion.string'=>'La ubicación no es tipo string.',
          'ubicacion.max'=>'Ubicación demasiado grande.',
          'ubicacion.min'=>'La ubicación tiene que contener al menos 2 letras..',
          'image.required'=>'Imagen de la Sociedad requerida.',
        ];
    }

}
