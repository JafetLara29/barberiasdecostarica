<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citation>
 */
class CitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->sentence(1),
            'time'=>$this->faker->sentence(1),
            'service_id'=>$this->faker->numberBetween(1,5),
            'barber_id'=>$this->faker->numberBetween(1,5),
            'sender'=>$this->faker->sentence(1),
            'read'=>$this->faker->boolean(),
              //
          ];
    }
}
