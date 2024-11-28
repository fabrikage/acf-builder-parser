<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasNewLines
{
    #[IsHiddenWhen('')]
    public string $newLines = '';

    public function getNewLines(): string
    {
        return $this->newLines;
    }
}
