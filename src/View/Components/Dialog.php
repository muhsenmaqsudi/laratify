<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Componel\Traits\HasDialogMethods;

class Dialog extends Component
{
    use HasDialogMethods;

    public $footer = null;
    public $activator = false;
    public $title;
    public $persistent;
    public $scrollable;
    public $size;
    public $okTitle;
    public $closeTitle;
    public $noClose;
    public $noTransition;
    public $noTitle;
    public $noFooter;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $size
     * @param bool $persistent
     * @param bool $scrollable
     * @param bool $noTransition
     * @param bool $noTitle
     * @param bool $noFooter
     * @param string $okTitle
     * @param string $closeTitle
     * @param bool $noClose
     */
    public function __construct($title = null, $size = 'sm', $persistent = false, $scrollable = false, $noTransition = false, $noTitle = false, $noFooter = false, $okTitle = 'Ok', $closeTitle = 'Close', $noClose = false)
    {
        $this->title = $title;
        $this->persistent = $persistent;
        $this->scrollable = $scrollable;
        $this->size = $this->checkDialogSize($size);
        $this->okTitle = $okTitle;
        $this->closeTitle = $closeTitle;
        $this->noClose = $noClose;
        $this->noTransition = $noTransition;
        $this->noTitle = $noTitle;
        $this->noFooter = $noFooter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.dialog');
    }
}
