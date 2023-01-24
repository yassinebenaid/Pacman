<?php

namespace App\Http\Livewire\Project\Concerns;

use App\Enums\FileType;
use App\Models\File;
use App\Services\ProjectService;

trait HasFiles
{
    protected $type = "all";

    public function type($type)
    {
        $available_tyes = FileType::values();

        $this->type = in_array($type, $available_tyes)
            ? $type
            : "all";
    }

    public function download($file)
    {
        return File::find($file)?->download();
    }


    public function files($definer)
    {
        return ProjectService::files($definer, $this->type);
    }
}
