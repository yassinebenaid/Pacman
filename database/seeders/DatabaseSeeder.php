<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\File;
use App\Models\Note;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(60)->create();

        User::factory()->create([
            'name' => 'Yassine Benaid',
            'email' => 'yassinebenaid@gmail.com',
        ]);

        Project::factory(200)->create();

        foreach (Project::all() as $project) {
            $project->members()
                ->attach(
                    User::inRandomorder()
                        ->take(fake()->numberBetween(5, 15))
                        ->get()
                );
        }

        Task::factory(1000)->create();
        File::factory(2000)->create();
        Note::factory(1000)->create();
    }
}
