<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHidden;

trait HasType
{
    #[IsHidden]
    public string $type = '';

    public function getType(): string
    {
        return $this->type;
    }
}
