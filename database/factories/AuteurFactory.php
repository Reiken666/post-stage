<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->name(),
            'Prénom' => $this->faker->name(),
            'Pays' => $this->faker->country(),
            'Date_décès' => $this->faker->date(),
        ];
    }
}
