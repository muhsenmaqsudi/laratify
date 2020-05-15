<?php

namespace Muhsenmaqsudi\Laratify\Traits;

use Illuminate\Support\Arr;

trait OptionFormatter
{
    private function formatOptions($options)
    {
        if (!Arr::isAssoc($options)) {
            return array_combine($options, $options);
        }

        return $options;
    }
}
