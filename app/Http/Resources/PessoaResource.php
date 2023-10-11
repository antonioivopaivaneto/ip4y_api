<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cpf' => $this->cpf,
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'data_de_nascimento' => $this->data_de_nascimento,
            'email' => $this->email,
            'genero' => $this->genero,

        ];
    }
}
