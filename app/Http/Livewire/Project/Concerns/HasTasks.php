<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Services\ProjectService;

trait HasTasks
{
    public function tasks($definer)
    {
        return ProjectService::tasks($definer);
    }
}
