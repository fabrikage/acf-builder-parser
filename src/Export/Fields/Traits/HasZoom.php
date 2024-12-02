<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasZoom
{
    public int|string $zoom = '';

    public function getZoom(): int|string
    {
        return $this->zoom;
    }
}
