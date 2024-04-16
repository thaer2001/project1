<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            'name' => $this->faker->streetName(),
            'address' => $this->faker->streetAddress(),
            'details' => $this->faker->text(),
            'pictures' => $this->faker->url(),
        ];
    }
}
