<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasMaxlength
{
    public string|int $maxlength = '';

    public function getMaxlength(): int
    {
        return $this->maxlength;
    }
}
