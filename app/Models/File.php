<?php

namespace App\Models;

use App\Enums\FileType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class File extends Model
{
    use HasFactory;

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function download()
    {
        return response()->download(
            storage_path("app/public/$this->source"),
            $this->name,
            ['Content-type' => "$this->meme"]
        );
    }


    public function icon(): Attribute
    {
        $icon = match ($this->type) {
            FileType::IMAGE->value => "<i class='text-green-600 bi bi-image'></i>",
            FileType::PDF->value => "<i class='text-red-500 bi bi-file-earmark-pdf'></i>",
            FileType::ZIP->value => "<i class='text-yellow-1 bi bi-file-earmark-zip'></i>",
            FileType::SOURCE_CODE->value => "<i style='color:rgb(95 150 233);' class='bi bi-file-earmark-code'></i>",
            FileType::OTHER->value => "<i class='bi bi-file-earmark text-gray-3'></i>",
        };

        return new Attribute(
            get: fn () => $icon
        );
    }


    public function getCreatedAtAttribute()
    {

        $created_at = Carbon::make($this->attributes['created_at']);

        return match ($created_at->isCurrentYear()) {
            true => $created_at->format("d M • H:i"),
            default => $created_at->format('d M Y • H:i')
        };
    }


    public function scopeType($query, $type)
    {
        if ($type !== "all")
            $query->when($type, fn ($query, $type) => $query->whereType($type));
    }
}
