<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasRowsPerPage
{
    #[IsHiddenWhen(0)]
    public int $rowsPerPage = 0;

    public function getRowsPerPage(): int
    {
        return $this->rowsPerPage;
    }
}
