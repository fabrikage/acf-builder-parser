<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasBidirectional;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostStatus;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostType;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTaxonomy;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasUi;

final class TypePostObject extends TypeAbstract
{
    use HasPostType;
    use HasPostStatus;
    use HasTaxonomy;
    use HasAllowNull;
    use HasMultiple;
    use HasReturnFormat;
    use HasAllowNull;
    use HasBidirectional;
    use HasUi;

    public static function getTypeName(): string
    {
        return 'post_object';
    }
}
