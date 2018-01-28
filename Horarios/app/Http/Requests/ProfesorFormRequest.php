<?php

namespace Horarios\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorFormRequest extends FormRequest
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
            //miramos la base de datos para condiciones
            'nombre'=>'required',
            'telefono'=>'required',
            'correo'=>'required',

        ];
    }
}
