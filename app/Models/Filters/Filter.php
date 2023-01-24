<?php

namespace App\Models\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class Filter
{
    protected Builder|Model $builder;

    protected function __construct()
    {
    }

    public static function make(Builder|Model $builder): static
    {
        $static =  new static;

        $static->builder = $builder;

        return $static;
    }

    public function datetime($date)
    {
        return match ($date) {
            'today' => now()->subDay(),
            'this-week' => now()->subWeek(),
            'this-month' => now()->subMonth(),
            'this-year' => now()->subYear(),
            default => 0
        };
    }
}
