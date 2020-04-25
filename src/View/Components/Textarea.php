<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
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
    public $placeholder;
    /**
     * @var int
     */
    public $rows;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string|null
     */
    public $value;

    /**
     * Create a new component instance.
     * @param string $name
     * @param string $label
     * @param string|null $id
     * @param string|null $placeholder
     * @param int $rows
     * @param string|null $value
     */
    public function __construct(string $name, string $label, ?string $id = null, ?string $placeholder = null, int $rows = 3, ?string $value = null)
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
        return view('componel::components.textarea');
    }
}
