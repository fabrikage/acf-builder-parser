<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasStep
{
    #[IsHiddenWhen('')]
    public int|string $step = '';

    public function getStep(): int|string
    {
        return $this->step;
    }
}
