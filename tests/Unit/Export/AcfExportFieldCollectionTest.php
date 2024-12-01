<?php

use Fabrikage\AcfBuilderParser\Export\AcfExportFieldCollection;
use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeAbstract;
use PHPUnit\Framework\TestCase;

class AcfExportFieldCollectionTest extends TestCase
{
    public function testGetFields()
    {
        $fieldMock = $this->createMock(TypeAbstract::class);
        $collection = new AcfExportFieldCollection();

        $reflection = new \ReflectionClass($collection);

        $property = $reflection->getProperty('fields');
        $property->setAccessible(true);
        $property->setValue($collection, ['field1' => $fieldMock]);

        $fields = iterator_to_array($collection->getFields());

        $this->assertCount(1, $fields);
        $this->assertSame($fieldMock, $property->getValue($collection)['field1']);
    }

    public function testGetField()
    {
        $fieldMock = $this->createMock(TypeAbstract::class);
        $collection = new AcfExportFieldCollection();
        $reflection = new \ReflectionClass($collection);
        $property = $reflection->getProperty('fields');
        $property->setAccessible(true);
        $property->setValue($collection, ['field1' => $fieldMock]);

        $field = $collection->getField('field1');

        $this->assertSame($fieldMock, $field);
    }

    public function testGetFieldWithInvalidKey()
    {
        $this->expectException(\TypeError::class);
        $this->expectExceptionMessage('Field with key "field1" not found');

        $collection = new AcfExportFieldCollection();
        $collection->getField('field1');
    }
}
