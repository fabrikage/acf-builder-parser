<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasDisplay
{
    #[IsHiddenWhen('')]
    public string $display = '';

    public function getDisplay(): string
    {
        return $this->display;
    }
}
