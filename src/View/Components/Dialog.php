<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Dialog extends Component
{
    public $footer = null;
    public $activator = false;
    public $title;
    public $persistent;
    public $scrollable;
    public $size;
    public $okTitle;
    public $closeTitle;
    public $noClose;

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param string $size
     * @param bool $persistent
     * @param bool $scrollable
     * @param string $okTitle
     * @param string $closeTitle
     * @param $noClose
     */
    public function __construct($title = 'My Modal', $size = 'sm', $persistent = false, $scrollable = false, $okTitle = 'Ok', $closeTitle = 'Close', $noClose = false)
    {
        $this->title = $title;
        $this->persistent = $persistent;
        $this->scrollable = $scrollable;
        $this->size = $this->checkDialogSize($size);
        $this->okTitle = $okTitle;
        $this->closeTitle = $closeTitle;
        $this->noClose = $noClose;
    }

    private function checkDialogSize($size)
    {
        if ($size === 'md') {
            return 'max-w-3xl';
        } elseif ($size === 'lg') {
            return 'max-w-6xl';
        } else {
            return 'max-w-sm';
        }
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
