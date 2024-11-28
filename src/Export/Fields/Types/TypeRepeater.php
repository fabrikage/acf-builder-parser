<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasButtonLabel;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasCollapsed;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasLayout;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPagination;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasRowsPerPage;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasSubFields;

final class TypeRepeater extends TypeAbstract
{
    use HasMinMax;
    use HasCollapsed;
    use HasButtonLabel;
    use HasLayout;
    use HasPagination;
    use HasRowsPerPage;
    use HasSubFields;

    public static function getTypeName(): string
    {
        return 'repeater';
    }
}
