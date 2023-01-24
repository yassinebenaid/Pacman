<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function search($name_or_email)
    {
        return User::select(['id', 'name', 'email'])
            ->search($name_or_email)
            ->take(5)
            ->get();
    }
}
