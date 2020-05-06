<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Componel\Traits\MakeResponsiveClasses;

class Grid extends Component
{
    use MakeResponsiveClasses;

    public $span;
    public $colStart;
    public $colEnd;
    public $rowStart;
    public $rowEnd;

    /**
     * Create a new component instance.
     *
     * @param array $span
     * @param array $colStart
     * @param array $colEnd
     * @param array $rowStart
     * @param array $rowEnd
     */
    public function __construct($span = [], $colStart = [], $colEnd = [], $rowStart = [], $rowEnd = [])
    {
        $this->span = $this->getClasses('col-span-', $span);
        $this->colStart = $this->getClasses('col-start-', $colStart);
        $this->colEnd = $this->getClasses('col-end-', $colEnd);
        $this->rowStart = $this->getClasses('row-start-', $rowStart);
        $this->rowEnd = $this->getClasses('row-end-', $rowEnd);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public
    function render()
    {
        return view('componel::components.grid');
    }
}
