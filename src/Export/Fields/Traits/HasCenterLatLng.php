<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasCenterLatLng
{
    #[IsHiddenWhen('')]
    public int|string $centerLat = '';

    #[IsHiddenWhen('')]
    public int|string $centerLng = '';

    public function getCenterLat(): int|string
    {
        return $this->centerLat;
    }

    public function getCenterLng(): int|string
    {
        return $this->centerLng;
    }
}
