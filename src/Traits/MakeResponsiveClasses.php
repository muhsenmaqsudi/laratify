<?php


namespace Muhsenmaqsudi\Componel\Traits;


trait MakeResponsiveClasses
{
    private function getClasses($class_prefix, $items)
    {
        $classBag = [];
        foreach ($items as $breakpoint => $responsive_value) {
            $classBag[$breakpoint] = $this->makeClass($class_prefix, $breakpoint, $responsive_value);
        }
        return implode(' ', $classBag);
    }

    private function makeClass($class, $breakpoint, $responsive_value)
    {
        if ($breakpoint === 'all') {
            return "{$class}{$responsive_value}";
        } else {
            return "{$breakpoint}:{$class}{$responsive_value}";
        }
    }
}