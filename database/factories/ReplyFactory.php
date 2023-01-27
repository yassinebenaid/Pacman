<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "issue_id" => fake()->numberBetween(1, 1000),
            "user_id" => fake()->numberBetween(1, 61),
            "body" => "# Hello world
            my name is yassine benaid , I am good developer

            ```
                echo 'hello world'
            ```"
        ];
    }
}
