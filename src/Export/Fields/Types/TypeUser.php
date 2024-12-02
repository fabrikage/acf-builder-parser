<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasBidirectional;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasRole;

final class TypeUser extends TypeAbstract
{
    use HasRole;
    use HasReturnFormat;
    use HasMultiple;
    use HasAllowNull;
    use HasBidirectional;

    public static function getTypeName(): string
    {
        return 'user';
    }
}
