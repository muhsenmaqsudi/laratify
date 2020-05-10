<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Row extends Component
{
    public $wrapCols;
    public $flexDir;

    /**
     * Create a new component instance.
     *
     * @param bool $wrapCols
     * @param string $flexDir
     */
    public function __construct($wrapCols = false, $flexDir = null)
    {
        $this->wrapCols = $wrapCols;
        $this->flexDir = $flexDir ? "flex-{$flexDir}" : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.row');
    }
}
