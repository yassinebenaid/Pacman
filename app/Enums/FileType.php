<?php

namespace App\Enums;

enum FileType: string
{
    case IMAGE = "img";
    case PDF = "pdf";
    case ZIP = "zip";
    case SOURCE_CODE = "code";
    case OTHER = "other";

    public static function values()
    {
        $values = [];

        foreach (self::cases() as $case) {
            $values[] = $case->value;
        }

        return $values;
    }
}
