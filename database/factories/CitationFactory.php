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
            // 'service_id'  =>'1', //Colocamos el primer servicio para evitar problemas de servicios inexistentes
            'barber_id'   => $this->faker->numberBetween(1, 50),
            'schedule_id' => $this->faker->numberBetween(1, 4),
            // 'day'         =>$this->faker->date(),
            'time'        => $this->faker->time(),
            'sender'      => $this->faker->name($gender = 'male' | 'female'),
            'read'        => $this->faker->boolean(),
            //
        ];
    }
}
