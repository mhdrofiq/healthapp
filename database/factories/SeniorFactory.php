<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeniorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'senior_name' => $this->faker->name(),
            'senior_phone' => $this->faker->phoneNumber,
            'senior_address' => $this->faker->address,
            'senior_birthdate' => $this->faker->date,
        ];
    }
}
