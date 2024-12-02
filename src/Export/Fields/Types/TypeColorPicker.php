<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasEnableOpacity;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeColorPicker extends TypeAbstract
{
    use HasDefaultValue;
    use HasEnableOpacity;
    use HasReturnFormat;

    public static function getTypeName(): string
    {
        return 'color_picker';
    }
}
