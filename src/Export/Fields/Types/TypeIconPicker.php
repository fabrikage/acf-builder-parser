<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLibrary;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTabs;

final class TypeIconPicker extends TypeAbstract
{
    use HasTabs;
    use HasReturnFormat;
    use HasLibrary;
    use HasDefaultValue;

    public static function getTypeName(): string
    {
        return 'icon_picker';
    }
}
