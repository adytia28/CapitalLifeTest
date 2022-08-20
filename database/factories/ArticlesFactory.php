<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =  $this->faker->unique()->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => $this->faker->imageUrl($width = 1080, $height = 1920),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->paragraphs(2, true),
            'type' => rand(0,1)
        ];
    }
}
