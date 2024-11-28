<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasReturnFormat
{
    #[IsHiddenWhen('')]
    public string $returnFormat = '';

    public function getReturnFormat(): string
    {
        return $this->returnFormat;
    }
}
