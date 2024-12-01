<?php

use Fabrikage\AcfBuilderParser\Export\AcfExportFieldAttribute;
use PHPUnit\Framework\TestCase;

class AcfExportFieldAttributeTest extends TestCase
{
    public function testConstructorWithDefaultValues()
    {
        $key = 'field_key';
        $value = 'field_value';
        $acfExportFieldAttribute = new AcfExportFieldAttribute($key, $value);

        $reflection = new \ReflectionClass($acfExportFieldAttribute);
        $keyFormatter = $reflection->getProperty('keyFormatter');
        $keyFormatter->setAccessible(true);

        $this->assertEquals($key, $acfExportFieldAttribute->key);
        $this->assertEquals($value, $acfExportFieldAttribute->value);
        $this->assertFalse($acfExportFieldAttribute->isTranslatable);
        $this->assertNull($keyFormatter->getValue($acfExportFieldAttribute));
    }

    public function testConstructorWithCustomValues()
    {
        $key = 'field_key';
        $value = 'field_value';
        $isTranslatable = true;
        $keyFormatterAnon = function ($key) {
            return strtoupper($key);
        };
        $acfExportFieldAttribute = new AcfExportFieldAttribute($key, $value, $isTranslatable, $keyFormatterAnon);

        $reflection = new \ReflectionClass($acfExportFieldAttribute);
        $keyFormatter = $reflection->getProperty('keyFormatter');
        $keyFormatter->setAccessible(true);

        $this->assertEquals($key, $acfExportFieldAttribute->key);
        $this->assertEquals($value, $acfExportFieldAttribute->value);
        $this->assertTrue($acfExportFieldAttribute->isTranslatable);
        $this->assertEquals($keyFormatterAnon, $keyFormatter->getValue($acfExportFieldAttribute));
    }
}
