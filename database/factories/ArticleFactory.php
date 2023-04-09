<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = str_replace(' ', '-', $title);
        return [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'thumbnail' => 'https://picsum.photos/200/300',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
