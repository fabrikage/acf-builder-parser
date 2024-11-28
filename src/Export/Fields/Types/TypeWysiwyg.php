<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaultValue;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDelay;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasMediaUpload;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasTabs;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasToolbar;

final class TypeWysiwyg extends TypeAbstract
{
    use HasDefaultValue;
    use HasTabs;
    use HasToolbar;
    use HasMediaUpload;
    use HasDelay;

    public static function getTypeName(): string
    {
        return 'wysiwyg';
    }
}
