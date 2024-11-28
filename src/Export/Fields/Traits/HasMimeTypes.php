<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMimeTypes
{
    #[IsHiddenWhen('')]
    public string $mimeTypes = '';

    public function getMimeTypes(): string
    {
        return $this->mimeTypes;
    }
}
