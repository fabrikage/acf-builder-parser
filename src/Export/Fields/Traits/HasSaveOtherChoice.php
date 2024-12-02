<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasSaveOtherChoice
{
    #[IsHiddenWhen(false)]
    public bool $saveOtherChoice = false;

    public function getSaveOtherChoice(): bool
    {
        return $this->saveOtherChoice;
    }
}
