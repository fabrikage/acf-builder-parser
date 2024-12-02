<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;

final class TypeUrl extends TypeAbstract
{
    use HasDefaultValue;
    use HasPlaceholder;

    public static function getTypeName(): string
    {
        return 'url';
    }
}
