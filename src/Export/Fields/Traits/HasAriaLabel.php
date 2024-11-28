<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasAriaLabel
{
    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string $ariaLabel = '';

    public function getAriaLabel(): string
    {
        return $this->ariaLabel;
    }

    public function getAriaLabelKey(): string
    {
        return 'aria-label';
    }
}
