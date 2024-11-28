<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasDefaultValue
{
    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string|bool $defaultValue = '';

    public function getDefaultValue(): string|bool
    {
        return $this->defaultValue;
    }
}
