<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'category' => fake()->word(),
            'client' => fake()->e164PhoneNumber,
            'projecturl' => fake()->email,
            'projectdate' => fake()->dateTime,
            'img' => fake()->imageUrl(873, 855, 'animals', true),
        ];
    }
}
