<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDimensions;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMimeTypes;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPreviewSize;

final class TypeImage extends TypeAbstract
{
    use HasDimensions;
    use HasMimeTypes;
    use HasPreviewSize;

    public static function getTypeName(): string
    {
        return 'image';
    }
}
