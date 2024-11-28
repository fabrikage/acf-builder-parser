<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasLabel
{
    #[IsTranslatable]
    public string $label = '';

    public function getLabel(): string
    {
        return $this->label;
    }
}
