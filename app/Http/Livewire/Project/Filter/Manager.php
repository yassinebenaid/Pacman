<?php

namespace App\Http\Livewire\Project\Filter;

use App\Services\UserService;
use Livewire\Component;

class Manager extends Component
{
    public $manager;

    public function getManagersProperty()
    {
        if ($this->manager)  return UserService::search($this->manager);

        return collect();
    }


    public function render()
    {
        return view('projects.partials.filter.manager')
            ->with([
                "managers" => $this->managers
            ]);
    }
}
