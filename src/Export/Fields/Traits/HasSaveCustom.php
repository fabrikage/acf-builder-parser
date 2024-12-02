<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasSaveCustom
{
    #[IsHiddenWhen(false)]
    public bool $saveCustom = false;

    public function getSaveCustom(): bool
    {
        return $this->saveCustom;
    }
}
