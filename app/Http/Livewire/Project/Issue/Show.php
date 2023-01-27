<?php

namespace App\Http\Livewire\Project\Issue;

use App\Services\IssueService;
use Livewire\Component;

class Show extends Component
{
    public $project_definer;
    public $issue_definer;


    public function mount()
    {
        $this->project_definer = request("project");
        $this->issue_definer = request("issue");
    }


    public function getIssueProperty()
    {
        return IssueService::specificIssue($this->project_definer, $this->issue_definer);
    }


    public function render()
    {
        return view('projects.issues.show')->with([
            "issue" => $this->issue
        ]);
    }
}
