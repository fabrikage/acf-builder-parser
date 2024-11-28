<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasRequired
{
    #[IsHiddenWhen(false)]
    public bool $required = false;

    public function getRequired(): bool
    {
        return $this->required;
    }
}
