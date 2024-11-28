<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHidden;

trait HasKey
{
    #[IsHidden]
    public string $key = '';

    public function getKey(): string
    {
        return $this->key;
    }
}
