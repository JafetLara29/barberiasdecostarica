<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citation>
 */
class BarbershopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $canton = ['Sarapiqui', 'Limon', 'Heredia', 'El Guarco', 'Desamparados'];
        return [
            'name'                    => $this->faker->company(),
            'address'                 => $this->faker->address(),
            'canton'                  => $canton[rand(0, 4)],
            'total_barbers_available' => $this->faker->numberBetween(5, 10),
            'created_barbers'         => $this->faker->numberBetween(5, 9)
            // 'map'=>$this->faker->sentence(),
        ];
    }
}
