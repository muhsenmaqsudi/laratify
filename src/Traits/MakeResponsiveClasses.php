<?php


namespace Muhsenmaqsudi\Componel\Traits;


trait MakeResponsiveClasses
{
    private function getResponsiveClasses($class_prefix, $class_suffix, $items)
    {
        $classBag = [];
        foreach ($items as $breakpoint => $responsive_value) {
            if (! is_null($responsive_value)) {
                $class_suffix = is_numeric($responsive_value) ? $class_suffix : '';
                $classBag[$breakpoint] = $this->makeResponsiveClasses($class_prefix, $class_suffix, $breakpoint, $responsive_value);
            }
        }
        return implode(' ', $classBag);
    }

    private function makeResponsiveClasses($class_prefix, $class_suffix, $breakpoint, $responsive_value)
    {
        return "{$breakpoint}:{$class_prefix}{$responsive_value}{$class_suffix}";
    }

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