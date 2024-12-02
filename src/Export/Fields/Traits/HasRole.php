<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;

trait HasRole
{
    #[IsHiddenWhen('')]
    public array|string $role = [];

    public function getRole(): array
    {
        return $this->role;
    }
}
