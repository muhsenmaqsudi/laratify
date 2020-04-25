<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
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
     * @var bool
     */
    public $disabled;
    /**
     * @var string|null
     */
    public $value;
    /**
     * @var string|null
     */
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
    public function __construct(string $name, $label = null, $checkboxLabel = null, $id = null, $disabled = false, $value = null)
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
