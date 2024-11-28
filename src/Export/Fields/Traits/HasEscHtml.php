<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasEscHtml
{
    #[IsHiddenWhen(\false)]
    public bool|int $escHtml = false;

    public function getEscHtml(): bool|int
    {
        return $this->escHtml;
    }
}
