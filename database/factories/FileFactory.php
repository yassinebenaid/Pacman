<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = ["pdf", 'img', 'code', 'zip', 'other'];
        $sizes = ["KB", "MB", "GB"];

        return [
            "task_id" => fake()->numberBetween(1, 1000),
            "user_id" => fake()->numberBetween(1, 61),
            "name" => fake()->words(3, 1),
            "type" => $types[fake()->numberBetween(0, 4)],
            "meme" => "image/jpeg",
            "size" => fake()->numberBetween(2, 10) . $sizes[fake()->numberBetween(0, 2)],
            "source" => "images/29.jpg",
        ];
    }
}
