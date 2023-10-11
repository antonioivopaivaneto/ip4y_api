<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->unique()->numerify('###########'),
            'nome' => $this->faker->firstName,
            'sobrenome' => $this->faker->lastName,
            'data_de_nascimento' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'genero' => $this->faker->randomElement(['Masculino', 'Feminino', 'Outro']),

        ];
    }
}
