<?php

namespace Database\Factories;

use App\Models\Senior;
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
            'senior_id' => Senior::factory(),
            'temperature' => $this->faker->numberBetween(30, 40),
            'recordtime_tm' => $this->faker->dateTimeBetween('2021-10-10', '2021-10-20')
        ];
    }
}
