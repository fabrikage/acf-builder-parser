<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowArchives;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasAllowNull;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMultiple;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostStatus;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasPostType;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTaxonomy;

final class TypePageLink extends TypeAbstract
{
    use HasPostType;
    use HasPostStatus;
    use HasTaxonomy;
    use HasAllowArchives;
    use HasMultiple;
    use HasAllowNull;

    public static function getTypeName(): string
    {
        return 'page_link';
    }
}
