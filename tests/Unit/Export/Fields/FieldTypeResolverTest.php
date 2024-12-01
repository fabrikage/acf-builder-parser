<?php

use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeText;
use PHPUnit\Framework\TestCase;

class FieldTypeResolverTest extends TestCase
{
    public function testResolve(): void
    {
        $fieldType = 'text';
        $expected = TypeText::class;
        $this->assertEquals($expected, Fabrikage\AcfBuilderParser\Export\Fields\FieldTypeResolver::resolve($fieldType));
    }
}
