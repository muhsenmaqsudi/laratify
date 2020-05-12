<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $links;
    public $notification;

    /**
     * Create a new component instance.
     *
     * @param $links
     * @param bool $notification
     */
    public function __construct($links, $notification = false)
    {
        $this->links = $links;
        $this->notification = $notification;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.navbar');
    }
}
