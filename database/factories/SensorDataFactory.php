<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class SensorDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_id' => Device::factory(),
            'temperature' => $this->faker->numberBetween(30, 40),
            'heartrate' => $this->faker->numberBetween(60, 100),
            'record_time' => $this->faker->dateTimeBetween('2021-10-10', '2021-10-20'),
        ];
    }
}
