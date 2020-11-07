<?php

namespace Database\Factories;

use App\Models\Prato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class PratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \DB::table('users')->select('id')->get();
        $user_id = $this->faker->randomElement($user_ids)->id;
        return [
            'nome' => $this->faker->word,
            'cal' => $this->faker->numberBetween($min = 100, $max = 5000),
            'nota' => $this->faker->sentence,
            'user_id' => $user_id,
        ];
    }
}
