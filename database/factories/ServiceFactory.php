<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ServiceFactory extends Factory
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
            'description'   => $this->faker->sentence(2),
            'price'         => $this->faker->numberBetween(3500, 5000),
            'serviceable_id' => $this->faker->numberBetween(1, 20),
            'serviceable_type' => $types[rand(0, 1)],
            'date_service' => $this->faker->date(),
        ];
    }
}
