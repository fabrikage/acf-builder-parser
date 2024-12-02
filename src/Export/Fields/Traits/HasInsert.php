<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasInsert
{
    #[IsHiddenWhen('')]
    public string $insert = '';

    public function getInsert(): string
    {
        return $this->insert;
    }
}
