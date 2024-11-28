<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasMediaUpload
{
    #[IsHiddenWhen(false)]
    public bool $mediaUpload = false;

    public function getMediaUpload(): bool
    {
        return $this->mediaUpload;
    }
}
