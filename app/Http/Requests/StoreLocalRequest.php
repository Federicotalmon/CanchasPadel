<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Error,debes ingresar un nombre.',
            'telefono.required' => 'Error,debes ingresar un telefono.',
            'direccion.required' => 'Error,debes ingresar un direccion.',
        ];
    }

}
