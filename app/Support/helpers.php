<?php



if (!function_exists("image")) {
    function image(string $name): string
    {
        return asset("storage/images/" . $name);
    }
}
