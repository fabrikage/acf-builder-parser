<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasConditionalLogic
{
    #[IsHiddenWhen(false)]
    public false|array $conditionalLogic = false;

    public function getConditionalLogic(): false|array
    {
        return $this->conditionalLogic;
    }
}
