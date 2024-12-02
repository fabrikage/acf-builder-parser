<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMaxlength;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasNewLines;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPlaceholder;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasRows;

final class TypeTextarea extends TypeAbstract
{
    use HasDefaultValue;
    use HasMaxlength;
    use HasRows;
    use HasPlaceholder;
    use HasNewLines;

    public static function getTypeName(): string
    {
        return 'textarea';
    }
}
