<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->word(),
            "content" => $this->faker->text(),
            "category_id" => $this->faker->numberBetween(1, 3),
            "image" => $this->faker->imageUrl(),
            "likes" => $this->faker->numberBetween(0, 100),
            "is_published" => 1,
        ];
    }
}
