<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Titre' => $this->faker->name(),
            'Auteurs' => $this->faker->name(),
            'Résumé' => $this->faker->realText(),
            'Prix' => $this->faker->randomDigitNotNull(),
            'Date_parution' => $this->faker ->date(),
            'Genre' => $this->faker ->word(),
            'Edition' => $this->faker ->word(),
            'Langue' => $this->faker ->languageCode(),
            'ISBN' => $this->faker ->isbn13(),
            'stock' => $this->faker ->randomDigit(),

        ];
    }
}
