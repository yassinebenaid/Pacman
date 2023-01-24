<?php

namespace Database\Factories;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dates = [
            now()->addDays(15),
            now()->addMonths(2),
            now()->addWeeks(3),
        ];

        return [
            "title" => fake()->sentence(4),
            "status" => TaskStatus::IN_PROGRESS->value,
            "deadline" => $dates[fake()->numberBetween(0, 2)],
            "description" => fake()->paragraphs(5, 1),
            "project_id" => fake()->numberBetween(1, 200)
        ];
    }
}
