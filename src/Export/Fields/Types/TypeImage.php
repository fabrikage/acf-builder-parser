<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits;

final class TypeImage extends TypeAbstract
{
    use Traits\HasReturnFormat;
    use Traits\HasLibrary;
    use Traits\HasDimensions;
    use Traits\HasMimeTypes;
    use Traits\HasPreviewSize;

    public static function getTypeName(): string
    {
        return 'image';
    }
}
