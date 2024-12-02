<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDisplayFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasFirstDay;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeDateTimePicker extends TypeAbstract
{
    use HasDisplayFormat;
    use HasReturnFormat;
    use HasFirstDay;

    public static function getTypeName(): string
    {
        return 'date_time_picker';
    }
}
