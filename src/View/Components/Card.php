<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $subtitle;
    public $titleClass;
    public $subtitleClass;

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param $subtitle
     * @param $titleClass
     * @param $subtitleClass
     */
    public function __construct($title,
                                $subtitle,
                                $titleClass = null,
                                $subtitleClass = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->titleClass = $titleClass;
        $this->subtitleClass = $subtitleClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.card');
    }
}
