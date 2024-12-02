<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLayouts;

final class TypeFlexibleContent extends TypeAbstract
{
    use HasLayouts;

    public static function getTypeName(): string
    {
        return 'flexible_content';
    }
}
