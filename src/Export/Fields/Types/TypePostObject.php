<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostType;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasReturnFormat;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTaxonomy;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasUi;

final class TypePostObject extends TypeAbstract
{
    use HasPostType;
    use HasTaxonomy;
    use HasAllowNull;
    use HasMultiple;
    use HasReturnFormat;
    use HasUi;

    public static function getTypeName(): string
    {
        return 'post_object';
    }
}
