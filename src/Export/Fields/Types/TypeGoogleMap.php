<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasCenterLatLng;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasWidthHeight;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasZoom;

final class TypeGoogleMap extends TypeAbstract
{
    use HasCenterLatLng;
    use HasZoom;
    use HasWidthHeight;

    public static function getTypeName(): string
    {
        return 'google_map';
    }
}
