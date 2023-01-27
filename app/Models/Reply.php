<?php

namespace App\Models;

use App\Support\Markdown;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function bodyHtml(): Attribute
    {
        $body = new Markdown($this->attributes['body']);

        return new Attribute(
            get: fn () => $body->html()
        );
    }
}
