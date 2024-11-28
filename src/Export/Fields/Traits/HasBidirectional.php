<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasBidirectional
{
    #[IsHiddenWhen(false)]
    public int|bool $bidirectional = 0;

    #[IsHiddenWhen([])]
    public array $bidirectionalTarget = [];

    public function getBidirectional(): int|bool
    {
        return $this->bidirectional;
    }

    public function getBidirectionalTarget(): array
    {
        return $this->bidirectionalTarget;
    }
}
