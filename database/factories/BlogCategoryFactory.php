<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->name,
            'description' => $this->faker->name,
            'image' => $this->faker->name,
            'status' => $this->faker->randomElement(['publish', 'unpublish', 'draft']),
        ];
    }
}
