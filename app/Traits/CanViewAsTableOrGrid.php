<?php

namespace App\Traits;

trait CanViewAsTableOrGrid
{
    public $view = "grid";

    public function grid()
    {
        $this->view = "grid";
    }

    public function table()
    {
        $this->view = "table";
    }
}
