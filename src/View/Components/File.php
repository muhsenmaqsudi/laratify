<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\HasInputAttributes;

class File extends Component
{
    use HasInputAttributes;

    public $variant;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $variant
     * @param string $id
     * @param string $label
     */
    public function __construct($name, $variant = 'blue-500', $id = null, $label = 'Select a file')
    {
        $this->name = $name;
        $this->variant = "bg-{$variant}";
        $this->id = $id ?? $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.file');
    }
}
