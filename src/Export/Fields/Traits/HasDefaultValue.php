<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasDefaultValue
{
    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string|bool|array $defaultValue = '';

    public function getDefaultValue(): string|bool|array
    {
        return $this->defaultValue;
    }
}
