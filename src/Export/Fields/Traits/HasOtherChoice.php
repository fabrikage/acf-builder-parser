<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasOtherChoice
{
    #[IsHiddenWhen(false)]
    public bool $otherChoice = false;

    public function getOtherChoice(): bool
    {
        return $this->otherChoice;
    }
}
