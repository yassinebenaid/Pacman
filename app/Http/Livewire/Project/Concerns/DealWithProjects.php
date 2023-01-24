<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Services\ProjectService;

trait DealWithProjects
{
    public function about($definer)
    {
        return ProjectService::about($definer);
    }
}
