<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasChoices;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLayout;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasOtherChoice;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasSaveOtherChoice;

final class TypeRadio extends TypeAbstract
{
    use HasChoices;
    use HasDefaultValue;
    use HasReturnFormat;
    use HasAllowNull;
    use HasOtherChoice;
    use HasLayout;
    use HasSaveOtherChoice;

    public static function getTypeName(): string
    {
        return 'radio';
    }
}
