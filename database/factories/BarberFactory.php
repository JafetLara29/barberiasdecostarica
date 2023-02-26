<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barber>
 */
class BarberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->company(),
            'image'         => 'storage/welcome_images/barber.jpg',
            'barbershop_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
