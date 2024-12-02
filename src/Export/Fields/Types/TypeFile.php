<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLibrary;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMimeTypes;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMaxSize;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeFile extends TypeAbstract
{
    use HasReturnFormat;
    use HasLibrary;
    use HasMinMaxSize;
    use HasMimeTypes;

    public static function getTypeName(): string
    {
        return 'file';
    }
}
