<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\MakeResponsiveClasses;

class Grids extends Component
{
    use MakeResponsiveClasses;

    public $rows;
    public $cols;
    public $gaps;

    /**
     * Create a new component instance.
     *
     * @param array $rows
     * @param array $cols
     * @param array $gaps
     */
    public function __construct($rows = [], $cols = [], $gaps = [])
    {
        $this->rows = $this->getClasses('grid-rows-', $rows);
        $this->cols = $this->getClasses('grid-cols-', $cols);
        $this->gaps = $this->getClasses('gap-', $gaps);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.grids');
    }
}
