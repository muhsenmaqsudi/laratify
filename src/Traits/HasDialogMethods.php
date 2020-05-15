<?php


namespace Muhsenmaqsudi\Laratify\Traits;


trait HasDialogMethods
{
    private function checkDialogSize($size)
    {
        if ($size === 'md') {
            return 'max-w-3xl';
        } elseif ($size === 'lg') {
            return 'max-w-6xl';
        } else {
            return 'max-w-sm';
        }
    }
}
