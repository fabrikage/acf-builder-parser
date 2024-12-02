<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDisplayFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeTimePicker extends TypeAbstract
{
    use HasDisplayFormat;
    use HasReturnFormat;

    public static function getTypeName(): string
    {
        return 'time_picker';
    }
}
