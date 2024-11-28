<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Traits;

use Generator;
use Fabrikage\AcfBuilderParser\Export\AcfExportFieldCollection;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHidden;
use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeAbstract;

trait HasSubFields
{
    #[IsHidden]
    public AcfExportFieldCollection $subFields;

    public function setSubFields(array $subFields): void
    {
        $collection = new AcfExportFieldCollection();

        foreach ($subFields as $subField) {
            try {
                $field = TypeAbstract::fromArray($subField);
                $collection->addField($field);
            } catch (\Exception $e) {
                continue;
            }
        }

        $this->subFields = $collection;
    }

    public function getSubFields(): Generator
    {
        return $this->subFields->getFields();
    }
}
