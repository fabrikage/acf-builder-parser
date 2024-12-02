<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasDisplayFormat
{
    #[IsHiddenWhen('')]
    public string $displayFormat = '';

    public function getDisplayFormat(): string
    {
        return $this->displayFormat;
    }
}
