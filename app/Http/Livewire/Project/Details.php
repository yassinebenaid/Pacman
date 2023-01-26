<?php

namespace App\Http\Livewire\Project;

use App\Http\Livewire\BaseComponent;
use App\Http\Livewire\Project\Concerns\DealWithProjects;
use App\Http\Livewire\Project\Concerns\HasFiles;
use App\Http\Livewire\Project\Concerns\HasMembers;
use App\Http\Livewire\Project\Concerns\HasIssues;
use App\Http\Livewire\Project\Concerns\HasTasks;
use App\Models\Project;
use App\Traits\CanViewAsTableOrGrid;
use App\Traits\HasMultipleSections;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Details extends BaseComponent
{
    use WithPagination,
        HasMultipleSections,
        CanViewAsTableOrGrid,
        HasTasks,
        DealWithProjects,
        HasFiles,
        HasIssues,
        HasMembers;

    public $definer;

    public $section = "about";
    protected $sections = ["tasks", "files", "activities", "issues", "about", "members"];
    protected $sensetiveSections = ["tasks", "files", "activities", "issues"];

    protected $queryString = [
        'section' => ["except" => "about", "as" => "cs"],
        'view' => ['except' => "grid"]
    ];

    protected $listeners = ["add-new-member" => "addMember"];

    public function mount(Request $request)
    {
        if ($request->section && !$this->isValidSection($request->section)) {
            $this->section = "about";
        }

        $this->definer = request("project");
    }


    public function getProjectProperty()
    {
        return match ($this->section) {
            "tasks" =>  $this->tasks($this->definer),
            "about" =>  $this->about($this->definer),
            "files" =>  $this->files($this->definer),
            "issues" =>  $this->issues($this->definer),
            "members" =>  $this->members($this->definer),
        };
    }


    public function render()
    {
        $this->checkIfSensetiveSection();

        return view("projects.details")
            ->with([
                "project" => $this->project
            ]);
    }


    private function checkIfSensetiveSection()
    {
        if ($this->isSensetiveSection() && !$this->project->authIsMember()) {
            $this->skipRender();
            redirect()->route("project.show", $this->definer);
        }
    }


    public function updatedPage()
    {
        $this->dispatchBrowserEvent("should:scroll");
    }


    public function paginationView()
    {
        return "components.main.pagination";
    }
}
