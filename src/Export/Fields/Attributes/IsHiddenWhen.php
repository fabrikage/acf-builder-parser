<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Attributes;

use Attribute;

/**
 * Hides the property in the output when the value is equal to the given value
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsHiddenWhen
{
    public function __construct(public mixed $value)
    {
    }

    public function value(): mixed
    {
        return $this->value;
    }
}
