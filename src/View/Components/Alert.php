<?php

namespace Muhsenmaqsudi\Componel\View\Components;;

use Illuminate\View\Component;

class Alert extends Component
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
     * Create a new component instance.
     *
     * @param $textColor
     * @param $bgColor
     */
    public function __construct(string $textColor = 'white', string $bgColor = 'blue-500')
    {
        $this->textColor = 'text-' . $textColor;
        $this->bgColor = 'bg-' . $bgColor;
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
