<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Models\Project;
use App\Services\ProjectService;

trait HasMembers
{
    public $name;

    /**
     * get project info with its all members
     *
     * @param string $definer
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function members($definer)
    {
        return ProjectService::members($definer, $this->name);
    }

    /**
     * accept membership request
     *
     * @param string $member_id member id encrypted
     * @return void
     */
    public function accept($member_id)
    {
        Project::whereDefiner($this->definer)->first()->members()->updateExistingPivot(decrypt($member_id), ['accepted' => true]);
    }

    /**
     * remove membership request
     *
     * @param string $member_id member id encrypted
     * @return void
     */
    public function remove($member_id)
    {
        Project::whereDefiner($this->definer)->first()->members()->detach(decrypt($member_id));
    }

    /**
     * add membership request
     *
     * @return void
     */
    public function add()
    {
        Project::whereDefiner($this->definer)->first()->members()->attach(auth()->id());
    }

    /**
     * cancel membership request
     *
     * @return void
     */
    public function cancel()
    {
        Project::whereDefiner($this->definer)->first()->members()->detach(auth()->id());
    }

    public function addMember($member_id)
    {
        Project::whereDefiner($this->definer)->first()->members()->attach($member_id, ["accepted" => true]);
    }

    /**
     * accept membership request
     *
     * @param string $member_id member id encrypted
     * @return void
     */
    public function upgrade($member_id)
    {
        Project::whereDefiner($this->definer)->first()->members()->updateExistingPivot(decrypt($member_id), ['is_manager' => true]);
    }

    /**
     * accept membership request
     *
     * @param string $member_id member id encrypted
     * @return void
     */
    public function disupgrade($member_id)
    {
        Project::whereDefiner($this->definer)->first()->members()->updateExistingPivot(decrypt($member_id), ['is_manager' => false]);
    }
}
