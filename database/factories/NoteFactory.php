<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => fake()->numberBetween(1, 61),
            "project_id" => fake()->numberBetween(1, 200),
            "body" => fake()->paragraphs(3, 1)
        ];
    }
}
