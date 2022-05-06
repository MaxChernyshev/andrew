<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'active' => true,
            'slug' => $this->faker(1),
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
