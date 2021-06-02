<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
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
            'nombre' => 'required| min;3',
            'apellidos' => 'required| min;3',
            'edad' => 'required| min;1',
            'email' => 'required| min;3',
            'telefono' => 'required| min;3',

        ];
    }
}
