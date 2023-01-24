<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Services\ProjectService;

trait HasNotes
{
    public function notes($definer)
    {
        return ProjectService::notes($definer);
    }
}
