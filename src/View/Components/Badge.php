<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * @var string
     */
    public $textColor;
    /**
     * @var string
     */
    public $bgColor;
    /**
     * @var bool
     */
    public $rounded;

    /**
     * Create a new component instance.
     *
     * @param string $textColor
     * @param string $bgColor
     * @param bool $rounded
     */
    public function __construct(string $textColor = 'white', string $bgColor = 'blue-500', bool $rounded = false)
    {
        $this->textColor = 'text-' . $textColor;
        $this->bgColor = 'bg-' . $bgColor;
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