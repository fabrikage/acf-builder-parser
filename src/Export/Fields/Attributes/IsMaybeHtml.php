<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Attributes;

use Attribute;

/**
 * Marks the property as maybe containing HTML, for formatting purposes
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsMaybeHtml
{
}
