<?php

namespace Tests\Unit;

use Fabrikage\AcfBuilderParser\Export\AcfExport;
use PHPUnit\Framework\TestCase;

class AcfExportTest extends TestCase
{
    public function testFromJsonWithValidJson(): void
    {
        $json = '{"key": "group_1", "fields": [{"key": "field_1", "label": "Field 1", "name": "field_1", "type": "text"}]}';
        $acfExport = AcfExport::fromJson($json);

        $this->assertInstanceOf(AcfExport::class, $acfExport);
        $this->assertEquals('group_1', $acfExport->getKey());
    }

    public function testFromJsonWithInvalidJson()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Invalid JSON');

        $json = '{"key": "group_1", "fields": [{"key": "field_1", "label": "Field 1", "name": "field_1", "type": "text"';
        AcfExport::fromJson($json);
    }

    public function testFromArray()
    {
        $data = [
            'key' => 'group_1',
            'fields' => [
                ['key' => 'field_1', 'label' => 'Field 1', 'name' => 'field_1', 'type' => 'text']
            ]
        ];
        $acfExport = AcfExport::fromArray($data);

        $this->assertInstanceOf(AcfExport::class, $acfExport);
        $this->assertEquals('group_1', $acfExport->getKey());
    }
}
