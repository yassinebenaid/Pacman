<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Filters\Filter;
use App\Models\Filters\test;
use App\Models\Filters\UserFilter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, "manager_id");
    }

    public function projects_membership()
    {
        return $this->belongsToMany(Project::class, "members", "member_id", "project_id");
    }

    public function scopeSearch($query, $name_or_email)
    {
        UserFilter::make($query)
            ->name($name_or_email)
            ->email($name_or_email, true);
    }

    public function scopeNotInProject($query, $project_id)
    {
        $query->whereDoesntHave("projects_membership", fn ($query) => $query->where("project_id", $project_id));
        $query->whereDoesntHave("projects", fn ($query) => $query->where("id", $project_id));
    }
}
