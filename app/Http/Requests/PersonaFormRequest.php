<?php

namespace hotel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
           'nombre'=>'required|max:20',
            'apellido_paterno'=>'required|max:20',
            'apellido_materno'=> 'required|max:20',
            'tipo_documento'=>'required|max:25',
            'num_documento'=>'required|max:12',
            'direccion'=>'max:100',
            'telefono'=>'required|max:8',
            'email'=>'required|max:40',
        ];
    }
}
