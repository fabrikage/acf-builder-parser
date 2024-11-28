<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasName
{
    public string $name = '';

    public function getName(): string
    {
        return $this->name;
    }
}
