<?php

namespace Database\Factories;

use App\Models\Senior;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
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
        ];
    }
}
