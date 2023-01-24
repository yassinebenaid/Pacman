<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Note extends Model
{
    use HasFactory;

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
}
