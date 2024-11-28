<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasUi
{
    #[IsHiddenWhen(false)]
    public bool $ui = false;

    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string $uiOnText = '';

    #[IsHiddenWhen('')]
    #[IsTranslatable]
    public string $uiOffText = '';

    public function getUi(): bool
    {
        return $this->ui;
    }

    public function getUiOnText(): string
    {
        return $this->uiOnText;
    }

    public function getUiOffText(): string
    {
        return $this->uiOffText;
    }
}
