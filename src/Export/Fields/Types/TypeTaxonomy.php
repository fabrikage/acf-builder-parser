<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasBidirectional;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTaxonomy;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasUi;

final class TypeTaxonomy extends TypeAbstract
{
    use HasTaxonomy;
    use HasReturnFormat;
    use HasMultiple;
    use HasAllowNull;
    use HasBidirectional;
    use HasUi;

    public static function getTypeName(): string
    {
        return 'taxonomy';
    }
}
