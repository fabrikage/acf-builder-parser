<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasEscHtml;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMessage;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasNewLines;

final class TypeMessage extends TypeAbstract
{
    use HasMessage;
    use HasNewLines;
    use HasEscHtml;

    public static function getTypeName(): string
    {
        return 'message';
    }
}
