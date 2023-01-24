<?php

namespace App\Models\Filters;

class UserFilter extends Filter
{

    public  function name($name, bool $or = false)
    {
        $this->builder->when($name, function ($query, $name) use ($or) {

            match ($or) {
                true => $query->orWhere("name", "like", "%" . $name . "%"),
                false => $query->where("name", "like", "%" . $name . "%"),
            };
        });

        return $this;
    }

    public  function email($email, bool $or = false)
    {
        $this->builder->when($email, function ($query, $email) use ($or) {

            match ($or) {
                true => $query->orWhere("email", "like", "%" . $email . "%"),
                false => $query->where("email", "like", "%" . $email . "%"),
            };
        });

        return $this;
    }
}
