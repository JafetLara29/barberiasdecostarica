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
            'date'=>$this->faker->date(),
            'time'=>$this->faker->time(),
            'service_id'=>$this->faker->numberBetween(1,5),
            'barber_id'=>$this->faker->numberBetween(1,5),
            'sender'=>$this->faker->name($gender ='male'|'female'),
            'read'=>$this->faker->boolean(),
              //
          ];
    }
}
