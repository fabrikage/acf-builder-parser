<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasTabs
{
    public string $tabs = 'all';

    public function getTabs(): string
    {
        return $this->tabs;
    }
}
