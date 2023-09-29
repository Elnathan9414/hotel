<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomClient' => $this->faker->lastName(),
            'prenomClient' => $this->faker->firstName(),
            'contactClient' => $this->faker->phoneNumber(),
            'emailClient' => $this->faker->unique()->safeEmail(),
            
        ];
    }
}
