<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Row extends Component
{
    public $wrapCols;
    public $flexDir;
    public $align;
    public $alignContent;
    public $justify;
    public $mainClasses;

    /**
     * Create a new component instance.
     *
     * @param bool $wrapCols
     * @param string $flexDir
     * @param $align
     * @param null $alignContent
     * @param $justify
     */
    public function __construct($wrapCols = false,
                                $flexDir = null,
                                $align = null,
                                $alignContent = null,
                                $justify = null)
    {
        $this->wrapCols = $wrapCols ? 'flex flex-wrap' : 'flex';
        $this->flexDir = $flexDir ? "flex-{$flexDir}" : null;
        $this->align = $align ? "items-{$align}" : null;
        $this->justify = $justify ? "justify-{$justify}" : null;
        $this->alignContent = $alignContent ? "content-{$alignContent}" : null;

        $this->mainClasses = trim(implode(' ', array_filter(static::extractPublicProperties())));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.row');
    }
}
