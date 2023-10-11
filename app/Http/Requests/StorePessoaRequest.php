<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaRequest extends FormRequest
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
            'cpf' => 'required|unique:pessoas',
            'nome' => 'required|string|max:80',
            'sobrenome' => 'required|string|max:80',
            'data_de_nascimento' => 'required|date',
            'email' => 'required|email|max:120',
            'genero' => 'required',
        ];
    }
}
