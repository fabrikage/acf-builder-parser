<?php

namespace Fabrikage\AcfBuilderParser\Export;

use Generator;
use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeAbstract;

class AcfExportFieldCollection
{
    private array $fields = [];

    public function getFields(): Generator
    {
        foreach ($this->fields as $field) {
            yield $field;
        }
    }

    public function getField(string $key): TypeAbstract
    {
        return $this->fields[$key];
    }

    public function hasField(string $key): bool
    {
        return isset($this->fields[$key]);
    }

    public function addField(TypeAbstract $field): void
    {
        $this->fields[] = $field;
    }
}