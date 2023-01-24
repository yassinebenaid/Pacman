<?php

namespace App\Http\Livewire\Project\Note;

use Livewire\Component;

class Create extends Component
{

    public function mount()
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('projects.notes.partials.create');
    }

    public function save()
    {
        dd($this->all());
    }
}
