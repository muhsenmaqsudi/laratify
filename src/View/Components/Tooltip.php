<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public $content;
    public $placement;
    public $trigger;
    public $appendTo;
    public $noArrow;

    /**
     * Create a new component instance.
     *
     * @param $content
     * @param string $placement
     * @param string $trigger
     * @param string $appendTo
     * @param bool $noArrow
     */
    public function __construct($content, $placement = 'top', $trigger = 'mouseenter', $appendTo = 'button', $noArrow = false)
    {
        $this->content = $content;
        $this->placement = $placement;
        $this->trigger = $trigger;
        $this->appendTo = $appendTo;
        $this->noArrow = $noArrow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.tooltip');
    }
}
