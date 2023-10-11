<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Pessoa;
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
        $id = $this->route('pessoa')->id ?? '';

        return [
            'cpf' => 'required|unique:pessoas,cpf,'.$id,
            'nome' => 'required|string|max:80',
            'sobrenome' => 'required|string|max:80',
            'data_de_nascimento' => 'required|date',
            'email' => 'required|email|unique:pessoas,email,'.$id,
            'genero' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'email.unique' => 'Este Email já está cadastrado.',
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 80 caracteres.',
            'sobrenome.required' => 'O campo sobrenome é obrigatório.',
            'sobrenome.string' => 'O campo sobrenome deve ser uma string.',
            'sobrenome.max' => 'O campo sobrenome não pode ter mais de 80 caracteres.',
            'data_de_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_de_nascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.max' => 'O campo email não pode ter mais de 120 caracteres.',
            'genero.required' => 'O campo gênero é obrigatório.',
            'genero.in' => 'O campo gênero deve ser um dos valores: Masculino, Feminino, Outro.',
        ];
    }
}
