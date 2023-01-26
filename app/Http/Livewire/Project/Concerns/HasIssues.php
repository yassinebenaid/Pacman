<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Services\IssueService;
use App\Services\ProjectService;

trait HasIssues
{
    public function issues($definer)
    {
        return IssueService::fromProject($definer);
    }
}
