<?php

namespace Fabrikage\AcfBuilderParser\Export;

use Closure;
use Fabrikage\AcfBuilderParser\Helpers\Str;

class AcfExportFieldAttribute
{
    public string $key;
    public mixed $value = null;
    public bool $isTranslatable = false;
    private ?Closure $keyFormatter;

    public function __construct(string $key, mixed $value, bool $isTranslatable = false, ?Closure $keyFormatter = null)
    {
        $this->key = $key;
        $this->value = $value;
        $this->isTranslatable = $isTranslatable;
        $this->keyFormatter = $keyFormatter;
    }

    public function getKeyFormatted(): string
    {
        if ($this->keyFormatter) {
            return call_user_func($this->keyFormatter, $this->key);
        }

        return Str::camelToSnake($this->key);
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
