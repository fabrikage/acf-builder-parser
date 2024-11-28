<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasPostType
{
    #[IsHiddenWhen('')]
    public array $postType = [];

    public function getPostType(): array
    {
        return $this->postType;
    }
}
