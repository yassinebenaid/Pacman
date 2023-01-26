<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
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
            "body" => "# Hello world
            my name is yassine benaid , I am good developer

            ```
                echo 'hello world'
            ```"
        ];
    }
}
