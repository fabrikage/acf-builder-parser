<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasPostStatus
{
    #[IsHiddenWhen('')]
    public array|string $postStatus = [];

    public function getPostStatus(): array
    {
        return $this->postStatus;
    }
}
