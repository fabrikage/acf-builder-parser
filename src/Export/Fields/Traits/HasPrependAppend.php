<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasPrependAppend
{
    #[IsHiddenWhen('')]
    public string $prepend = '';

    #[IsHiddenWhen('')]
    public string $append = '';

    public function getPrepend(): string
    {
        return $this->prepend;
    }

    public function getAppend(): string
    {
        return $this->append;
    }
}
