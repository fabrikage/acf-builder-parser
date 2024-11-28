<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;

trait HasMessage
{
    #[IsTranslatable]
    public string $message = '';

    public function getMessage(): string
    {
        return $this->message;
    }
}
