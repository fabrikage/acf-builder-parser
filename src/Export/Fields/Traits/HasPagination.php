<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

trait HasPagination
{
    public int|bool $pagination = 0;

    public function getPagination(): int|bool
    {
        return $this->pagination;
    }
}
