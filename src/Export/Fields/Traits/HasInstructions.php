<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsMaybeHtml;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasInstructions
{
    #[IsHiddenWhen('')]
    #[IsMaybeHtml]
    #[IsTranslatable]
    public string $instructions = '';

    public function getInstructions(): string
    {
        return $this->instructions;
    }
}
