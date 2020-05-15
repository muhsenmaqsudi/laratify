<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $name;
    public $links;
    public $bgColor;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param $links
     * @param $bgColor
     */
    public function __construct($name, $links, $bgColor = null)
    {
        $this->name = $name;
        $this->links = $links;
        $this->bgColor = $bgColor ? "bg-{$bgColor}" : 'bg-gray-800';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.dropdown');
    }
}
