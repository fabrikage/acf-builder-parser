<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMinMax
{
    #[IsHiddenWhen('')]
    public int|string $min = '';

    #[IsHiddenWhen('')]
    public int|string $max = '';

    public function getMin(): int|string
    {
        return $this->min;
    }

    public function getMax(): int|string
    {
        return $this->max;
    }
}
