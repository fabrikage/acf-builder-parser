<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

/**
 * A selection of properties that are common to all fields.
 */
trait HasDefaults
{
    use HasKey;
    use HasLabel;
    use HasName;
    use HasAriaLabel;
    use HasType;
    use HasInstructions;
    use HasRequired;
    use HasConditionalLogic;
    use HasWrapper;
    use HasParentRepeater;
}
