<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasWidthHeight
{
    #[IsHiddenWhen('')]
    public int|string $width = '';

    #[IsHiddenWhen('')]
    public int|string $height = '';

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
