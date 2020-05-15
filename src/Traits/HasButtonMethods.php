<?php


namespace Muhsenmaqsudi\Laratify\Traits;


trait HasButtonMethods
{
    private function getMainClasses()
    {
        return "{$this->getBackgroundsClasses()} {$this->getTypographyClasses()} {$this->getBordersClasses()} {$this->getInteractivityClasses()}
        {$this->getSpacingClasses()} {$this->getTransitionsClasses()} {$this->getPseudoVariantClasses()}";
    }

    private function getBackgroundsClasses()
    {
        return $this->outline === true ? 'bg-transparent' : "bg-{$this->variant} shadow";
    }

    private function getTypographyClasses()
    {
        return "{$this->getTextColor()} {$this->getTextSize()} font-bold";
    }

    private function getTextColor()
    {
        return $this->outline === true ? "text-{$this->variant}" : 'text-white';
    }

    private function getTextSize()
    {
        if ($this->size === 'sm') {
            return 'text-xs';
        } else if ($this->size === 'md') {
            return 'text-sm';
        } else {
            return 'text-base';
        }
    }

    private function getActivePseudoClasses()
    {
        $explodedVariant = explode('-', $this->variant);
        $color = $explodedVariant[0];
        $weight = $explodedVariant[1] + 100;
        return "active:bg-{$color}-{$weight}";
    }

    private function getHoverPseudoClasses()
    {
        return $this->outline === true ? "hover:bg-{$this->variant} hover:text-white" : 'hover:shadow-md';
    }

    private function getFocusPseudoClasses()
    {
        return 'focus:outline-none';
    }

    private function getPseudoVariantClasses()
    {
        return "{$this->getHoverPseudoClasses()} {$this->getActivePseudoClasses()} {$this->getFocusPseudoClasses()}";
    }

    private function getSpacingClasses()
    {
        return 'px-4 py-2 mr-1 mb-1';
    }

    private function getTransitionsClasses()
    {
        return 'transition transition-all ease-in duration-75';
    }

    private function getInteractivityClasses()
    {
        return 'outline-none';
    }

    private function getBordersClasses()
    {
        $border = $this->outline === true ? "border border-solid border-{$this->variant}" : null;
        $rounded = $this->rounded === true ? 'rounded-full' : 'rounded';
        return "{$border} {$rounded}";
    }
}
