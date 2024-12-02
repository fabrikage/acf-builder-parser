<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasFilters
{
    #[IsHiddenWhen('')]
    public array|string $filters = [];

    public function getFilters(): array
    {
        return (array) $this->taxonomy;
    }
}
