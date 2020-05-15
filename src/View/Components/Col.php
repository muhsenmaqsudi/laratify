<?php

namespace Muhsenmaqsudi\Laratify\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Laratify\Traits\MakeResponsiveClasses;

class Col extends Component
{
    use MakeResponsiveClasses;

    public $colsWidth;
    public $responsiveClasses;
    public $flex;
    public $order;
    public $alignSelf;
    public $mainClasses;

    /**
     * Create a new component instance.
     *
     * @param $cols
     * @param string $flex
     * @param string $order
     * @param null $alignSelf
     * @param $sm
     * @param $md
     * @param $lg
     * @param $xl
     */
    public function __construct($cols,
                                $flex = 'none',
                                $order = null,
                                $alignSelf = null,
                                $sm = null,
                                $md = null,
                                $lg = null,
                                $xl = null)
    {
        $this->colsWidth = is_numeric($cols) ? "w-{$cols}/12" : "w-{$cols}";
        $this->flex = "flex-{$flex}";
        $this->order = $order ? "order-{$order}" : null;
        $this->alignSelf = $alignSelf ? "self-{$alignSelf}" : null;
        $this->responsiveClasses = $this->getResponsiveClasses('w-', '/12', [
            'sm' => $sm, 'md' => $md, 'lg' => $lg, 'xl' => $xl
        ]);
        $this->mainClasses = trim(implode(' ', array_filter(static::extractPublicProperties())));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laratify::components.col');
    }
}
