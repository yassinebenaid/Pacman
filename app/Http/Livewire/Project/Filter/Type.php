<?php

namespace App\Http\Livewire\Project\Filter;

use App\Models\ProjectType;
use App\Services\ProjectService;
use Livewire\Component;

class Type extends Component
{
    public $name;


    public function getTypesProperty()
    {
        return $this->name
            ? ProjectService::types($this->name)
            : collect();
    }


    public function render()
    {
        return view('projects.partials.filter.type')
            ->with([
                "types" => $this->types
            ]);
    }
}
