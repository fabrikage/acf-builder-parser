<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPrependAppend;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasStep;

final class TypeRange extends TypeAbstract
{
    use HasDefaultValue;
    use HasMinMax;
    use HasStep;
    use HasPrependAppend;

    public static function getTypeName(): string
    {
        return 'range';
    }
}
