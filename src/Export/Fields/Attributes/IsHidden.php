<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Attributes;

use Attribute;

/**
 * Hides the property in the output
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsHidden
{
}
