<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasWidthHeight;

final class TypeOembed extends TypeAbstract
{
    use HasWidthHeight;

    public static function getTypeName(): string
    {
        return 'oembed';
    }
}
