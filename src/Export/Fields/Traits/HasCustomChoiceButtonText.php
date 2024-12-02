<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasCustomChoiceButtonText
{
    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string $customChoiceButtonText = '';

    public function getCustomChoiceButtonText(): string
    {
        return $this->customChoiceButtonText;
    }
}
