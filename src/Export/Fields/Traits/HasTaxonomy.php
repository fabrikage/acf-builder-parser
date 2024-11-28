<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasTaxonomy
{
    #[IsHiddenWhen('')]
    public array|string $taxonomy = [];

    public function getTaxonomy(): array
    {
        return $this->taxonomy;
    }
}
