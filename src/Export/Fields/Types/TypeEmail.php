<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPrependAppend;

final class TypeEmail extends TypeAbstract
{
    use HasDefaultValue;
    use HasPlaceholder;
    use HasPrependAppend;

    public static function getTypeName(): string
    {
        return 'email';
    }
}
