<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemperatureFactory extends Factory
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
            'temperature' => $this->faker->numberBetween(30, 40),
            'recordtime_tm' => $this->faker->dateTimeBetween('2021-10-10', '2021-10-20')
        ];
    }
}
