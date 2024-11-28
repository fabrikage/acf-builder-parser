<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasDelay
{
    #[IsHiddenWhen(false)]
    public bool $delay = false;

    public function getDelay(): bool
    {
        return $this->delay;
    }
}
