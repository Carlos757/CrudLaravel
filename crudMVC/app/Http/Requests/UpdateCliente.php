<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCliente extends FormRequest
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
            'rfc' => 'required|regex:/^[A-Za-z][A-Za-z][A-Za-z][A-Za-z][0-9][0-9][0-9][0-9][0-9][0-9]$/',
            'nombre' => 'required|max:50|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'edad' => 'required|integer',
            'idCiudad' => 'required|integer',

        ];
    }
    public function messages()
    {
        return[
            'rfc.unique' => 'El RFC proporcionado ya esta registrado' ,
            /* 'nombre.regex' => 'El campo nombre debe de contener solo letras' */
        ];
    }
}
