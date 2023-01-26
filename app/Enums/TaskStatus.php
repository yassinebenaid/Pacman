<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum TaskStatus: string
{
    case IN_PROGRESS = "in_progress";
    case DONE = "done";
    case PAUSED = "paused";

    public function name()
    {
        return ucwords(strtolower(Str::replace("_", " ", $this->name)));
    }

    public static function status($value)
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) return $case;
        }

        return null;
    }

    public function color()
    {
        return match ($this) {
            static::IN_PROGRESS => "text-yellow-1",
            static::PAUSED => "text-slate-500",
            static::DONE => "text-green-600",
        };
    }
}
