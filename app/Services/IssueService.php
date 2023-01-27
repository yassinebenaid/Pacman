<?php

namespace App\Services;

use App\Models\Issue;
use App\Models\Project;

class IssueService
{
    public static function new($project_definer, $issue, $user)
    {
        return Project::whereDefiner($project_definer)
            ->first()
            ?->issues()
            ->create([
                "body" => htmlspecialchars($issue),
                "definer" => str()->ulid(),
                "user_id" => $user
            ]);
    }


    public static function fromProject($project_definer)
    {
        $project =  Project::whereDefiner($project_definer)
            ->select(['id', "manager_id", 'definer', "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->firstOrFail();

        $project->issues = $project->issues()->with("user:id,name,profession")->orderBy('id', "desc")->paginate(25);

        return $project;
    }

    public static function specificIssue($project_definer, $issue_definer)
    {
        $issue = Issue::whereDefiner($issue_definer)
            ->with(["project:id,definer,name", "user:id,name,profession"])
            ->firstOrFail();

        abort_if($project_definer !== $issue->project->definer, 404);

        $issue->replies = $issue->replies()->with("user:id,name,profession")->paginate();

        return $issue;
    }
}
