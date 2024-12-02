<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMinMaxSize
{
    #[IsHiddenWhen('')]
    public int|string $minSize = '';

    #[IsHiddenWhen('')]
    public int|string $maxSize = '';

    public function getMinSize(): int
    {
        return $this->minSize;
    }

    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
}
