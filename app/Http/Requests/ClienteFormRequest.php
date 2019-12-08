<?php

namespace hotel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            
        'Title'=> 'required',
        'FName' =>'required',
        'LName' =>'required',
        'Email' => 'required',
        'National' =>'required',
        'Documento' => 'required',
        'codigo_documento' =>'required',
        'Country' => 'required',
        'Phone'=> 'required',
        'TRoom' => 'required',
        'Bed' => 'required',
        'NRoom' => 'required',
        'Meal' => ' required',
        'cin' => 'gte:cin|required',
        'cout' =>'gte:cout|required',
        
       
        ];
    }
}
