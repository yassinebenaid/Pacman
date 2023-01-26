<?php

namespace App\Services;

use App\Models\Project;

class IssueService
{
    public static function new($project_definer, $issue, $user)
    {
        return Project::whereDefiner($project_definer)
            ->first()
            ?->notes()
            ->create([
                "body" => $issue,
                "user_id" => $user
            ]);
    }


    public static function fromProject($project_definer)
    {
        $project =  Project::whereDefiner($project_definer)
            ->select(['id', "manager_id", 'definer', "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->firstOrFail();

        $project->notes = $project->notes()->with("user:id,name,profession")->orderBy('id', "desc")->paginate(25);

        return $project;
    }
}
