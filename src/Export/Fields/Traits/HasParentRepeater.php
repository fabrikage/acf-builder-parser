<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHidden;

trait HasParentRepeater
{
    #[IsHidden]
    public string $parentRepeater = '';

    public function getParentRepeater(): string
    {
        return $this->parentRepeater;
    }
}
