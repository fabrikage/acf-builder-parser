<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasAllowArchives
{
    #[IsHiddenWhen(false)]
    public bool $allowArchives = false;

    public function getAllowArchives(): bool
    {
        return $this->allowArchives;
    }
}
