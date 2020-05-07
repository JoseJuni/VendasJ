<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:6|max:50',
            'endereco' => 'required|min:10|max:255',
            'email' => 'required|min:10|max:50',
            'telefone' => 'required|min:9|max:15',
            'user' =>'required|min:6|max:50',
            'password' => 'required|min:6|max:200'
        ];
    }
}
