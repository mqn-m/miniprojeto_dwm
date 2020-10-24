<?php

namespace Database\Factories;

use App\Models\Refeicao;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefeicaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Refeicao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'altura_dia' => $this->faker->randomElement(['Pequeno-Almoço', 'Almoço','Jantar','Lanche manhã','Lanche tarde','Ceia']),
            'data_refeicao' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'total_cal' => $this->faker->numberBetween($min = 100, $max = 5000),
            'notas' => $this->faker->sentence,
            'user' =>$this->faker->randomDigit
        ];
    }
}
