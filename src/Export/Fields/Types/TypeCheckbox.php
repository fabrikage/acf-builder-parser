<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowCustom;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasChoices;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasCustomChoiceButtonText;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLayout;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasSaveCustom;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasToggle;

final class TypeCheckbox extends TypeAbstract
{
    use HasChoices;
    use HasDefaultValue;
    use HasReturnFormat;
    use HasAllowCustom;
    use HasLayout;
    use HasToggle;
    use HasSaveCustom;
    use HasCustomChoiceButtonText;

    public static function getTypeName(): string
    {
        return 'checkbox';
    }
}
