<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasButtonLabel
{
    #[IsTranslatable]
    public string $buttonLabel = '';

    public function getButtonLabel(): string
    {
        return $this->buttonLabel;
    }
}
