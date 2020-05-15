<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\HasInputAttributes;

class Input extends Component
{
    use HasInputAttributes;

    public $type;
    public $placeholder;
    public $readonly;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param string $type
     * @param null $label
     * @param null $id
     * @param null $value
     * @param null $placeholder
     * @param null $hint
     * @param bool $disabled
     * @param bool $readonly
     */
    public function __construct($name, $type = 'text', $label = null, $id = null, $value = null, $placeholder = null, $hint = null, $disabled = false, $readonly = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label ?? Str::title(str_replace('_', ' ', $name));
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->hint = $hint;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.input');
    }
}
