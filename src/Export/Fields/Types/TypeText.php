<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMaxlength;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPrependAppend;

final class TypeText extends TypeAbstract
{
    use HasDefaultValue;
    use HasPrependAppend;
    use HasMaxlength;
    use HasPlaceholder;

    public static function getTypeName(): string
    {
        return 'text';
    }
}
