<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class File extends Component
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $variant;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $variant
     * @param string $id
     * @param string $label
     */
    public function __construct(string $name, string $variant = 'blue-500', ?string $id = null, string $label = 'Select a file')
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
        return view('componel::components.file');
    }
}
