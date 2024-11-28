<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasLayout
{
    #[IsHiddenWhen('')]
    public string $layout = '';

    public function getLayout(): string
    {
        return $this->layout;
    }
}
