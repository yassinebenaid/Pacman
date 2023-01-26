<?php

namespace App\Http\Livewire\Project\Issue;

use App\Http\Livewire\BaseComponent;
use App\Services\IssueService;
use App\Support\Promise;

class Create extends BaseComponent
{
    public $definer;

    public $issue;

    protected $rules = ["issue" => "required|min:10"];


    public function save()
    {
        $data = $this->validate();

        Promise::make(fn () => IssueService::new($this->definer, $data['issue'], auth()->id()))
            ->then(fn () => $this->success("Note created successfully"))
            ->then(fn () => $this->emitUp('$refresh'))
            ->catch(fn ($e) => $this->error($e->getMessage()));
    }


    public function render()
    {
        return view('projects.issues.partials.create');
    }
}
