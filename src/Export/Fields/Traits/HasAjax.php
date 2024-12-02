<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasAjax
{
    #[IsHiddenWhen(false)]
    public bool $ajax = false;

    public function getAjax(): bool
    {
        return $this->ajax;
    }
}
