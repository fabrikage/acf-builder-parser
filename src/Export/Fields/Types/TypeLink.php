<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeLink extends TypeAbstract
{
    use HasReturnFormat;

    public static function getTypeName(): string
    {
        return 'link';
    }
}
