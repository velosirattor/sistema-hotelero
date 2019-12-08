<?php

namespace hotel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'nombre_producto'=>'required|max:20',
            'descripcion'=>'max:100',
            'unidad_medida'=> 'required|max:30',
            'precio_producto'=>'required|numeric',
            'stock'=>'required|numeric',
            'imagen'=>'mimes:jpeg,jpg,bmb,png',
            
        ];
    }
}
