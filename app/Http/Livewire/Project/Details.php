<?php

namespace App\Http\Livewire\Project;


use App\Http\Livewire\Project\Concerns\DealWithProjects;
use App\Http\Livewire\Project\Concerns\HasFiles;
use App\Http\Livewire\Project\Concerns\HasMembers;
use App\Http\Livewire\Project\Concerns\HasNotes;
use App\Http\Livewire\Project\Concerns\HasTasks;
use App\Models\Project;
use App\Traits\CanViewAsTableOrGrid;
use App\Traits\HasMultipleSections;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Details extends Component
{
    use WithPagination,
        HasMultipleSections,
        CanViewAsTableOrGrid,
        HasTasks,
        DealWithProjects,
        HasFiles,
        HasNotes,
        HasMembers;

    public $definer;

    public $section = "about";
    protected $sections = ["tasks", "files", "activities", "notes", "about", "members"];
    protected $sensetiveSections = ["tasks", "files", "activities", "notes"];

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
            "notes" =>  $this->notes($this->definer),
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


    public function checkIfSensetiveSection()
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
