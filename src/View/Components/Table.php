<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $columns;
    public $rows;
    public $stripped;
    public $hover;
    public $actions;
    public $actionsCustomView;

    /**
     * Create a new component instance.
     *
     * @param $columns
     * @param $rows
     * @param bool $actions
     * @param bool $hover
     * @param bool $stripped
     * @param bool $actionsCustomView
     */
    public function __construct($columns, $rows, $actions = false, $hover = false, $stripped = false, $actionsCustomView = false)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->stripped = $stripped;
        $this->hover = $hover;
        $this->actions = $actions;
        $this->actionsCustomView = $actionsCustomView;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.table');
    }
}
