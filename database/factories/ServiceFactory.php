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
        $types = ['barber', 'barbershop'];
        return [
            'description'   =>$this->faker->sentence(2),
            'price'         =>$this->faker->numberBetween(3500, 5000),
            'barbershop_id' =>$this->faker->numberBetween(1, 20)
        ];
    }
}
