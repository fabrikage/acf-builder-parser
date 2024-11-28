<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasTabs
{
    public string|array $tabs = 'all';

    public function getTabs(): string|array
    {
        return $this->tabs;
    }
}
