<?php

namespace App\Models;

use App\Support\Markdown;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use League\CommonMark\CommonMarkConverter;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "project_id", "body"];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute()
    {

        $created_at = Carbon::make($this->attributes['created_at']);

        return match ($created_at->isCurrentYear()) {
            true => $created_at->format("d M • H:i"),
            default => $created_at->format('d M Y • H:i')
        };
    }

    public function bodyHtml(): Attribute
    {
        $body = new Markdown($this->attributes['body']);

        return new Attribute(
            get: fn () => $body->html()
        );
    }
}
