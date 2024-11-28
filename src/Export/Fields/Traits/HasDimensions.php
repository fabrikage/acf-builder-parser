<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasDimensions
{
    #[IsHiddenWhen('')]
    public string|int $minWidth = '';

    #[IsHiddenWhen('')]
    public string|int $minHeight = '';

    #[IsHiddenWhen('')]
    public string|int $minSize = '';

    #[IsHiddenWhen('')]
    public string|int $maxWidth = '';

    #[IsHiddenWhen('')]
    public string|int $maxHeight = '';

    #[IsHiddenWhen('')]
    public string|int $maxSize = '';

    public function getMinWidth(): int
    {
        return $this->minWidth;
    }

    public function getMinHeight(): int
    {
        return $this->minHeight;
    }

    public function getMinSize(): int
    {
        return $this->minSize;
    }

    public function getMaxWidth(): int
    {
        return $this->maxWidth;
    }

    public function getMaxHeight(): int
    {
        return $this->maxHeight;
    }

    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
}
