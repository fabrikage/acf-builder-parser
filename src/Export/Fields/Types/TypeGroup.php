<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasSubFields;

final class TypeGroup extends TypeAbstract
{
    use HasSubFields;

    public static function getTypeName(): string
    {
        return 'group';
    }
}
