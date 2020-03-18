<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPost extends FormRequest
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
            'cpf' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'Informe CPF',
            'required' => 'Informe sua Senha'
        ]; 
    }
}
