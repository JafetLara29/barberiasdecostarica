<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $types = ['App\Models\Barber', 'App\Models\Barbershop'];
        return [
            'day'               => $this->faker->dayOfWeek(),
            'start_time'        => $this->faker->time(),
            'end_time'          => $this->faker->time(),
            'scheduleable_id'   => $this->faker->numberBetween(1, 20),
            'scheduleable_type' => $types[rand(0, 1)]
        ];
    }
}
