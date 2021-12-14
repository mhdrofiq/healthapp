<?php

namespace Database\Factories;

use App\Models\Senior;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeartrateFactory extends Factory
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
            'bpm' => $this->faker->numberBetween(60, 100),
            'recordtime_hr' => $this->faker->dateTimeBetween('2021-10-10', '2021-10-20')
        ];
    }
}
