<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasInsert;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLibrary;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMimeTypes;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMaxSize;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMaxWidthHeight;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPreviewSize;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeGallery extends TypeAbstract
{
    use HasReturnFormat;
    use HasLibrary;
    use HasMinMax;
    use HasMinMaxSize;
    use HasMinMaxWidthHeight;
    use HasMimeTypes;
    use HasInsert;
    use HasPreviewSize;

    public static function getTypeName(): string
    {
        return 'gallery';
    }
}
