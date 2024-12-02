<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasChoices
{
    // #[ArrayParser('key', IsTranslatable::class)]
    // TODO: Implement ArrayParser to handle parsing of array values
    #[IsHiddenWhen([])]
    public array|string $choices = [];

    public function getChoices(): array
    {
        return $this->choices;
    }
}
