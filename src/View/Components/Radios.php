<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\HasInputAttributes;
use Muhsenmaqsudi\Laratify\Traits\OptionFormatter;

class Radios extends Component
{
    use HasInputAttributes, OptionFormatter;

    public $options;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param $label
     * @param array $options
     * @param null $id
     * @param bool $disabled
     * @param null $value
     */
    public function __construct($name, array $options, $label = null, $id = null, $disabled = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label ?? Str::title(str_replace('_', ' ', $name));
        $this->options = $this->formatOptions($options);
        $this->id = $id ?? $name;
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
        return view('laratify::components.radios');
    }
}
