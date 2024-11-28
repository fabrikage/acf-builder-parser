<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasPreviewSize
{
    #[IsHiddenWhen('')]
    public string $previewSize = '';

    public function getPreviewSize(): string
    {
        return $this->previewSize;
    }
}
