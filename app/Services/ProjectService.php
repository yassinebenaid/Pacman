<?php

namespace App\Services;

use App\Enums\FileType;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\User;

class ProjectService
{

    public static function all(array $filters)
    {
        return Project::select(['id', 'definer', 'name', 'type', 'created_at'])
            ->selectRaw('CONCAT(LEFT(description,255),"...") as description')
            ->withCount("members")
            ->filter($filters)
            ->paginate(2);
    }


    public static function forSpecificManager(User $manager, array $filters)
    {
        return $manager->projects()
            ->select(['id', 'definer', 'name', 'type', 'created_at'])
            ->selectRaw('CONCAT(LEFT(description,255),"...") as description')
            ->withCount("members")
            ->selectRaw("(select count(*) from projects where projects.manager_id = {$manager->id} ) as projects_count ")
            ->filter($filters)
            ->paginate(2);
    }


    public static function types($name)
    {
        return ProjectType::where('name', "like", "%" . $name . "%")->take(5)->get();
    }


    public static function about($project_definer)
    {
        return Project::whereDefiner($project_definer)
            ->with("manager:id,name,profession")
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->firstOrFail();
    }

    public static function tasks($project_definer)
    {
        $project =  Project::whereDefiner($project_definer)
            ->select(['id', 'definer', "manager_id", "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->firstOrFail();

        $project->tasks = $project->tasks()
            ->select(["id", "project_id", "title", "status", "created_at", "deadline"])
            ->paginate();


        return $project;
    }


    public static function files($project_definer, $type)
    {
        $project = Project::whereDefiner($project_definer)
            ->select(['id', 'definer', "manager_id", "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->withCount("files")
            ->withCount(['files as files_pdf_count' => fn ($query) => $query->whereType(FileType::PDF->value)])
            ->withCount(['files as files_img_count' => fn ($query) => $query->whereType(FileType::IMAGE->value)])
            ->withCount(['files as files_code_count' => fn ($query) => $query->whereType(FileType::SOURCE_CODE->value)])
            ->withCount(['files as files_zip_count' => fn ($query) => $query->whereType(FileType::ZIP->value)])
            ->withCount(['files as files_other_count' => fn ($query) => $query->whereType(FileType::OTHER->value)])
            ->firstOrFail();

        $project->files = $project->files()->type($type)->paginate();

        return $project;
    }


    public static function notes($project_definer)
    {
        $project =  Project::whereDefiner($project_definer)
            ->select(['id', "manager_id", 'definer', "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->firstOrFail();

        $project->notes = $project->notes()->with("user:id,name,profession")->paginate(5);

        return $project;
    }

    public static function members($project_definer, $name_or_email = null)
    {
        $project =   Project::whereDefiner($project_definer)
            ->select(['id', "manager_id", 'definer', "created_at", 'name'])
            ->withCount(["members as auth_is_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(true)])
            ->withCount(["members as auth_sent_request_member" => fn ($query) => $query->whereMemberId(auth()->id())->whereAccepted(false)])
            ->withCount(["members" => fn ($query) => $query->whereAccepted(true)])
            ->with("manager:id,name,profession")
            ->firstOrFail();

        $project->members = $project->members($name_or_email)
            ->withPivot(['is_manager', 'accepted'])
            ->wherePivot('accepted', true)
            ->paginate();

        $project->membership_requests = $project->members()
            ->wherePivot('accepted', false)
            ->paginate();

        return $project;
    }
}
