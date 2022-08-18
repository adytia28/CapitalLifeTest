<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word(),
            'slug' => $this->faker->uuid(),
            'thumbnail' => $this->faker->imageUrl($width = 1080, $height = 1920),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->paragraph(),
        ];
    }
}
