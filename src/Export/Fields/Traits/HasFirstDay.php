<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasFirstDay
{
    public int|string $firstDay = '';

    public function getFirstDay(): int|string
    {
        return $this->firstDay;
    }
}
