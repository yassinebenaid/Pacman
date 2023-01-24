<?php



if (!function_exists("image")) {

    function image(string $name): string
    {
        return asset("storage/images/" . $name);
    }
}

if (!function_exists("safe_text")) {

    function safe_text($text): string
    {
        return  strip_tags(nl2br($text), '<br>');
    }
}
