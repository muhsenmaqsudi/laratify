<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public $navs;

    /**
     * Create a new component instance.
     *
     * @param $navs
     */
    public function __construct($navs)
    {
        $this->navs = json_encode($navs);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.tabs');
    }
}
