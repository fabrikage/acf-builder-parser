<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAjax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasChoices;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasUi;

final class TypeSelect extends TypeAbstract
{
    use HasChoices;
    use HasDefaultValue;
    use HasReturnFormat;
    use HasMultiple;
    use HasAllowNull;
    use HasUi;
    use HasAjax;
    use HasPlaceholder;

    public static function getTypeName(): string
    {
        return 'select';
    }
}
