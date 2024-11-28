<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasLibrary
{
    #[IsHiddenWhen('')]
    public string $library = '';

    public function getLibrary(): string
    {
        return $this->library;
    }
}
