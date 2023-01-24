<?php

namespace App\Traits;

use Exception;

trait HasMultipleSections
{

    public function section($section)
    {
        if (in_array($section, $this->sections)) {

            $this->section = $section;

            $this->resetPage();

            $this->dispatchBrowserEvent('should:scroll');
        }
    }


    public function isSensetiveSection()
    {
        return in_array($this->section, $this->sensetiveSections);
    }

    public function isValidSection($section)
    {
        return in_array($section, $this->sections);
    }


    public function isCurrent($section)
    {
        return $this->section === $section;
    }
}
