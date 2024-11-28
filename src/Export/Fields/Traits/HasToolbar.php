<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasToolbar
{
    #[IsHiddenWhen('')]
    public string $toolbar = '';

    public function getToolbar(): string
    {
        return $this->toolbar;
    }
}
