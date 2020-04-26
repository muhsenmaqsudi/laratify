<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Muhsenmaqsudi\Componel\Traits\HasInputAttributes;

class Checkbox extends Component
{
    use HasInputAttributes;

    public $checkboxLabel;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param string|null $checkboxLabel
     * @param string|null $id
     * @param bool $disabled
     * @param string|null $value
     */
    public function __construct($name, $label = null, $checkboxLabel = null, $id = null, $disabled = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checkboxLabel = $checkboxLabel ?? Str::title(str_replace('_', ' ', $name));
        $this->id = $id;
        $this->disabled = $disabled;
        $this->value = $value;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.checkbox');
    }
}
