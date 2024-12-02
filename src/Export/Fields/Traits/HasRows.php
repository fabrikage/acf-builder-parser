<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasRows
{
    #[IsHiddenWhen('')]
    public int|string $rows = '';

    public function getRows(): int
    {
        return (int) $this->rows;
    }
}
