<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $textColor;
    public $bgColor;

    /**
     * Create a new component instance.
     *
     * @param $textColor
     * @param $bgColor
     */
    public function __construct($textColor = null, $bgColor = null)
    {
        $this->textColor = $textColor ? 'text-' . $textColor : 'text-' . config('componel.text-base-color');
        $this->bgColor = $bgColor ? 'bg-' . $bgColor : 'bg-' . config('componel.background-base-color');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.alert');
    }
}
