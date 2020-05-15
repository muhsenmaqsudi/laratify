<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\HasInputAttributes;

class Textarea extends Component
{
    use HasInputAttributes;

    public $placeholder;
    public $rows;

    /**
     * Create a new component instance.
     * @param string $name
     * @param string $label
     * @param string|null $id
     * @param string|null $placeholder
     * @param int $rows
     * @param string|null $value
     */
    public function __construct($name, $label, $id = null, $placeholder = null, $rows = 3, $value = null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.textarea');
    }
}
