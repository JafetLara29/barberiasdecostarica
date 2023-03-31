<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $medias = ['facebook', 'whatsapp', 'instagram'];
        $types = ['App\Models\Barber', 'App\Models\Barbershop'];
        return [
            'data'                 => $this->faker->sentence(2),
            'type'                 => $medias[rand(0, 2)],
            'social_mediable_id'   => $this->faker->numberBetween(1, 20),
            'social_mediable_type' => $types[rand(0, 1)]
        ];
    }
}
