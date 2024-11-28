<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasCollapsed
{
    #[IsHiddenWhen('')]
    public string $collapsed = '';

    public function getCollapsed(): string
    {
        return $this->collapsed;
    }
}
