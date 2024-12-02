<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMinMaxWidthHeight
{
    #[IsHiddenWhen('')]
    public int|string $minWidth = '';

    #[IsHiddenWhen('')]
    public int|string $maxWidth = '';

    #[IsHiddenWhen('')]
    public int|string $minHeight = '';

    #[IsHiddenWhen('')]
    public int|string $maxHeight = '';

    public function getMinWidth(): int
    {
        return $this->minWidth;
    }

    public function getMaxWidth(): int
    {
        return $this->maxWidth;
    }

    public function getMinHeight(): int
    {
        return $this->minHeight;
    }

    public function getMaxHeight(): int
    {
        return $this->maxHeight;
    }
}
