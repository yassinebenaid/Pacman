<?php

namespace App\Models;

use App\Models\Filters\ProjectFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Project extends Model
{
    use HasFactory;


    public function manager()
    {
        return $this->belongsTo(User::class);
    }


    public function members($name_or_email = null)
    {
        $query =  $this->belongsToMany(User::class, "members", "project_id", "member_id");

        if ($name_or_email) {
            $query->whereExists(function ($query) use ($name_or_email) {
                $query->where('users.name', "like", "%" . $name_or_email . "%")
                    ->orWhere('users.email', "like", "%" . $name_or_email . "%");
            });
        }

        return $query;
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function files()
    {
        return $this->hasManyThrough(File::class, Task::class);
    }

    public function notes()
    {
        return $this->hasMany(Issue::class);
    }


    public function authIsMember()
    {
        return ($this->manager_id === auth()->id()) || $this->auth_is_member;
    }

    public function authIsManager()
    {
        return (auth()->id() === $this->manager_id) || $this->auth_is_manager;
    }

    public function authIsOwner()
    {
        return auth()->id() === $this->manager_id;
    }

    public function getCreatedAtAttribute()
    {
        $created_at = Carbon::make($this->attributes['created_at']);

        return match ($created_at->isCurrentYear()) {
            true => $created_at->format("d M"),
            default => $created_at->format('d M Y')
        };
    }



    public function scopeFilter($query, $filters)
    {
        ProjectFilter::make($query)
            ->manager($filters['manager'] ?? false)
            ->type($filters['type'] ?? false)
            ->date($filters['date'] ?? false);
    }
}
