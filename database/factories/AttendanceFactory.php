<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_at' => $this->faker->dateTimeBetween('2021-11-01 00:00:00', '2021-11-30 23:59:00')
        ];
    }
}
