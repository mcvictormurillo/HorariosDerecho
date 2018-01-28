<?php

namespace Horarios\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use Horarios\Http\Requests\Request

class ProfesorFormRequest extends Request
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
    public function rules() // creamos las reglas para el formulario
    {
        return [ //estos son los nombres de los objestos en el formulario html a validar Y NO NECESARIAMENTE LOS CAMPOS BD
            'cedula' => 'required'
            'nombre' => 'required'
            'telefono' => 'required'
            'correo' => 'required'
            'estado' => 'required'
        ];
    }
}
