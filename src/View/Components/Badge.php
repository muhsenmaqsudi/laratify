<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $textColor;
    public $bgColor;
    public $rounded;

    /**
     * Create a new component instance.
     *
     * @param string $textColor
     * @param string $bgColor
     * @param bool $rounded
     */
    public function __construct(string $textColor = null, string $bgColor = null, bool $rounded = false)
    {
        $this->textColor = $textColor ? 'text-' . $textColor : 'text-' . config('componel.text-base-color');
        $this->bgColor = $bgColor ? 'bg-' . $bgColor : 'bg-' . config('componel.background-base-color');
        $this->rounded = $rounded === true ? 'rounded-full' : 'rounded';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.badge');
    }
}