<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_domicilio>
 */
class User_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //parametros
        return [
            'domicilio' => $this->faker->sentence(3),
            'numero_exterior' => $this->faker->numberBetween(10, 1000),
            'colonia' => $this->faker->sentence(3),
            'cp' => $this->faker->randomNumber(5, true),
            'ciudad' => $this->faker->word()
        ];
    }
}
