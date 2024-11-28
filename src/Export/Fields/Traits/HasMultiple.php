<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMultiple
{
    #[IsHiddenWhen(false)]
    public bool $multiple = false;

    public function getMultiple(): bool
    {
        return $this->multiple;
    }
}
