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
        return [
            'name'=>$this->faker->company(),
            'schedule'=>$this->faker->sentence(),
            'ubication'=>$this->faker->address(),
            'map'=>$this->faker->sentence(),
            'total_barbers'=>$this->faker->numberBetween(1,10),
            'created_barbers'=>$this->faker->numberBetween(1,5),

          ];
    }
}
