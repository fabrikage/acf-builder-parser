<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasPlaceholder
{
    #[IsTranslatable]
    #[IsHiddenWhen('')]
    public string $placeholder = '';

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }
}
