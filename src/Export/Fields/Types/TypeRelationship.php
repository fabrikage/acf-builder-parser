<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasBidirectional;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasElements;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasFilters;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMinMax;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostStatus;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostType;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTaxonomy;

final class TypeRelationship extends TypeAbstract
{
    use HasPostType;
    use HasPostStatus;
    use HasTaxonomy;
    use HasFilters;
    use HasReturnFormat;
    use HasMinMax;
    use HasElements;
    use HasBidirectional;

    public static function getTypeName(): string
    {
        return 'relationship';
    }
}
