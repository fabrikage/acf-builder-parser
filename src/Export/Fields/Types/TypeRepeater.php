<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasButtonLabel;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasSubFields;

final class TypeRepeater extends TypeAbstract
{
    use HasSubFields;
    use HasButtonLabel;
    use HasMinMax;

    public static function getTypeName(): string
    {
        return 'repeater';
    }
}
