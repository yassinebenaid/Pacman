<?php

namespace App\Http\Livewire\Project;

use App\Http\Livewire\BaseComponent;
use App\Services\ProjectService;
use App\Traits\CanViewAsTableOrGrid;
use App\Traits\HasMultipleSections;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Index extends BaseComponent
{
    use WithPagination, CanViewAsTableOrGrid, HasMultipleSections;

    /** represent the current opened section*/
    public $section = "all";

    /** available sections */
    protected  $sections = ['all', 'mine'];


    /** used for filtering the results
     * @var int manager id
     */
    public $manager;

    /** used for filtering the results
     * @var date
     */
    public $date;

    /** used for filtering the results
     * @var string
     */
    public $type;


    protected $listeners = ['manager', 'type'];


    protected $queryString = [
        "section" => ["except" => "all", "as" => "cs"],
        'view' => ['except' => "grid"],
    ];

    public function mount(Request $request)
    {
        if ($request->cs && !$this->isValidSection($request->cs)) {
            $this->section = "all";
        }
    }
    /**
     * set the manager whose projects will be retrieved
     *
     * @param int $manager manager id
     * @return void
     */
    public function manager($manager)
    {
        $this->manager = match ($manager) {
            "any" => null,
            default => $manager
        };
    }

    /**
     * set the manager whose projects will be retrieved
     *
     * @param int $manager manager id
     * @return void
     */
    public function type($type)
    {
        $this->type = match ($type) {
            "any" => null,
            default => $type
        };
    }


    /**
     * set the date to filter projects with
     *
     * @param int $manager manager id
     * @return void
     */
    public function date($date)
    {
        $dates = ['today', 'this-month', 'this-week', 'this-year'];

        $this->date = in_array($date, $dates)
            ? $date
            : null;
    }


    /**
     * get the managers property dynamically
     *
     * @return mixed
     */
    public function getProjectsProperty()
    {
        $filters = [
            "manager" => $this->manager,
            "date" => $this->date,
            "type" => $this->type,
        ];

        return $this->isCurrent("mine")

            ? ProjectService::forSpecificManager(auth()->user(), $filters)

            : ProjectService::all($filters);
    }


    public function paginationView()
    {
        return "components.main.pagination";
    }


    public function render()
    {
        // we pass the properties as normal vaiables rather than set them as public properties
        // for performance reasons
        return view('projects.index')
            ->with([
                "isAll" => $this->isCurrent("all"),
                "isTable" => $this->view === "table",
                "projects" => $this->projects
            ]);
    }
}
