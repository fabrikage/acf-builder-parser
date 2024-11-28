<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMessage;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasUi;

final class TypeTrueFalse extends TypeAbstract
{
    use HasMessage;
    use HasDefaultValue;
    use HasUi;

    public static function getTypeName(): string
    {
        return 'true_false';
    }
}
