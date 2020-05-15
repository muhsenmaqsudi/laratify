<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\HasInputAttributes;
use Muhsenmaqsudi\Laratify\Traits\OptionFormatter;

class Select extends Component
{
    use HasInputAttributes, OptionFormatter;

    public $options;
    public $firstOption;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param null $label
     * @param array $options
     * @param null $id
     * @param bool $disabled
     * @param bool $firstOption
     * @param string $value
     */
    public function __construct($name, array $options, $label = null,  $id = null, $disabled = false, $firstOption = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $this->formatOptions($options);
        $this->id = $id;
        $this->disabled = $disabled;
        $this->firstOption = $firstOption;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.select');
    }
}
