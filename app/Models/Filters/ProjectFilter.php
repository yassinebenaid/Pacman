<?php

namespace App\Models\Filters;

class ProjectFilter extends Filter
{
    public function manager($id)
    {
        $this->builder->when($id, function ($query, $id) {
            $query->whereExists(fn ($q) => $q->whereManagerId($id));
        });

        return $this;
    }

    public function date($date)
    {
        $this->builder->when($date, function ($query, $date) {
            $query->whereExists(fn ($q) => $q->whereDate("created_at", ">=", $this->datetime($date)));
        });

        return $this;
    }

    public function type($type)
    {
        $this->builder->when($type, function ($query, $type) {
            $query->whereExists(fn ($q) => $q->where("type", "like", $type));
        });

        return $this;
    }
}
