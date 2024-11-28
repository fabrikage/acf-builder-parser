<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasAllowNull
{
    #[IsHiddenWhen(false)]
    public bool $allowNull = false;

    public function getAllowNull(): bool
    {
        return $this->allowNull;
    }
}
