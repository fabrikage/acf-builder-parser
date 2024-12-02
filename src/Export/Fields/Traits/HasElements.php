<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasElements
{
    #[IsHiddenWhen('')]
    public string $elements = '';

    public function getElements(): string
    {
        return $this->elements;
    }
}
