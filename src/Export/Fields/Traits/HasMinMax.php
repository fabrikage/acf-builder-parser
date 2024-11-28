<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasMinMax
{
    public int $min = 0;
    public int $max = 0;

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }
}
