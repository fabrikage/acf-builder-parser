<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasWrapper
{
    // Hide when default values are set
    #[IsHiddenWhen([
        'width' => '',
        'class' => '',
        'id' => '',
    ])]
    public array $wrapper = [
        'width' => '',
        'class' => '',
        'id' => '',
    ];

    public function getWrapper(): array
    {
        return $this->wrapper;
    }
}
