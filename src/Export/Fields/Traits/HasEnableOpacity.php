<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasEnableOpacity
{
    #[IsHiddenWhen(false)]
    public bool $enableOpacity = false;

    public function getEnableOpacity(): bool
    {
        return $this->enableOpacity;
    }
}
