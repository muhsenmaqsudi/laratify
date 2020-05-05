<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Componel\Traits\HasButtonMethods;

class Button extends Component
{
    use HasButtonMethods;

    public $mainClasses;
    private $variant;
    private $outline;
    private $size;
    private $rounded;
    public $events;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param array $events
     * @param string $variant
     * @param string $size
     * @param bool $rounded
     * @param bool $outline
     * @param null $id
     */
    public function __construct(array $events = [], $variant = null, $size = 'text-xs', $rounded = false, $outline = false, $id = null)
    {
        $this->variant = $variant ? $variant : config('componel.background-base-color');
        $this->outline = $outline;
        $this->size = $size;
        $this->rounded = $rounded;
        $this->events = $events;
        $this->id = $id;

        $this->mainClasses = $this->getMainClasses();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.button');
    }
}
