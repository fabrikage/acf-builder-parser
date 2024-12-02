<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasToggle
{
    #[IsHiddenWhen(false)]
    public bool $toggle = false;

    public function getToggle(): bool
    {
        return $this->toggle;
    }
}
