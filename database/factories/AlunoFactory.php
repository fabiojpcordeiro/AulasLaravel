<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aluno;


class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'email'=> $this->faker->unique()->safeEmail(),
            'matricula'=>$this->faker->unique()->numerify('MAT######')
        ];
    }
}
