<?php

namespace App\Http\Livewire\Project\Filter;

use App\Models\User;
use Livewire\Component;

class AddMembersManually extends Component
{
    public $user;
    public $project_id;



    public function getUsersProperty()
    {
        return $this->user
            ? User::search($this->user)->notInProject($this->project_id)->take(5)->get(['id', "name", "email"])
            : collect();
    }


    public function render()
    {
        return view('projects.members.partials.add-member-manually', ["users" => $this->users]);
    }
}
