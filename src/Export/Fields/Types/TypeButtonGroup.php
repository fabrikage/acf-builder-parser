<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasChoices;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLayout;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;

final class TypeButtonGroup extends TypeAbstract
{
    use HasChoices;
    use HasReturnFormat;
    use HasAllowNull;
    use HasLayout;

    public static function getTypeName(): string
    {
        return 'button_group';
    }
}
