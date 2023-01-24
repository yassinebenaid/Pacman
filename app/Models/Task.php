<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Task extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }


    public function status(): Attribute
    {
        return new Attribute(
            get: fn () => TaskStatus::status($this->attributes['status']),
        );
    }


    public function createdAt(): Attribute
    {
        $created_at = Carbon::make($this->attributes['created_at'] ?? null);

        return new Attribute(
            get: function () use ($created_at) {
                return $created_at?->isCurrentYear()
                    ? $created_at?->format("d M")
                    : $created_at?->format('d M Y');
            }
        );
    }


    public function deadline(): Attribute
    {
        $deadline = Carbon::make($this->attributes['deadline'] ?? null);

        return new Attribute(
            get: fn () => $deadline?->format('d M Y')
        );
    }


    public function dealineColor(): Attribute
    {
        $color = match (true) {
            $this->deadline_prc <= 50 => '#5ac08f',
            $this->deadline_prc <= 75 => '#fabe25',
            $this->deadline_prc <= 100 => '#FA6322',
            $this->deadline_prc > 100 => 'red',
        };

        return new Attribute(
            get: fn () => $color
        );
    }


    public function deadlineCounter(): Attribute
    {
        $deadline = Carbon::make($this->attributes['deadline']);

        return new Attribute(
            get: fn () => $deadline->diffForHumans()
        );
    }


    public function deadlinePrc(): Attribute
    {
        $from = Carbon::make($this->attributes['created_at']);
        $deadline = Carbon::make($this->attributes["deadline"]);


        $totalDuration = $from->diffInMicroseconds($deadline);

        $timePassed = $from->diffInMicroseconds();

        $percentage = ($timePassed < $totalDuration)
            ?  ($timePassed / $totalDuration) * 100
            : 101; // we use this value for progress bar to show it as red

        return new Attribute(
            get: fn () => ceil($percentage)
        );
    }
}
