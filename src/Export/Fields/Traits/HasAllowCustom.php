<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasAllowCustom
{
    #[IsHiddenWhen(false)]
    public bool $allowCustom = false;

    public function getAllowCustom(): bool
    {
        return $this->allowCustom;
    }
}
