<?php

namespace Database\Factories;

use App\Models\ProjectType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Symfony\Component\Uid\Ulid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $featured = [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1];

        return [
            'name' => $this->faker->streetName(),
            'caption' => $this->faker->sentence(4),
            'description' => $this->faker->paragraphs(8, true),
            'manager_id' => $this->faker->numberBetween(1, 61),
            'type' => ProjectType::inRandomOrder()->first()->name,
            'featured' => $featured[$this->faker->numberBetween(0, 10)],
            'definer' => Str::ulid(),
        ];
    }
}
