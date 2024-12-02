<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPrependAppend;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasStep;

final class TypeNumber extends TypeAbstract
{
    use HasDefaultValue;
    use HasMinMax;
    use HasPlaceholder;
    use HasStep;
    use HasPrependAppend;

    public static function getTypeName(): string
    {
        return 'number';
    }
}
