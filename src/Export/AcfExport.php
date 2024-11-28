<?php

namespace Fabrikage\AcfBuilderParser\Export;

use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeAbstract;

/**
 * AcfExport is a class that represents the data from an ACF export file.
 */
class AcfExport
{
    public function __construct(
        private array $data,
        private AcfExportFieldCollection $fields
    ) {
        $this->fields = $fields;
    }

    public static function fromJson(string $json): self|array
    {
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Invalid JSON: ' . json_last_error_msg());
        }

        return self::fromArray($data);
    }

    public static function fromArray(array $data): self|array
    {
        $fields = new AcfExportFieldCollection();

        if (!isset($data['fields'])) {
            $return = [];

            foreach ($data as $_data) {
                $return[] = self::fromArray($_data);
            }

            return $return;
        }

        foreach ($data['fields'] ?? [] as $field) {
            try {
                $fields->addField(TypeAbstract::fromArray($field));
            } catch (\Exception $e) {
                error_log('Error parsing field: ' . $e->getMessage());

                if (function_exists('dump')) {
                    dump($e);
                }
            }
        }

        return new self($data, $fields);
    }

    public function getKey(): string
    {
        return $this->data['key'] ?? '';
    }

    /**
     * @param string $textdomain
     * @return AcfExportFieldAttribute[]
     */
    public function getDefaults(): array
    {
        return [
            'title' => new AcfExportFieldAttribute('title', $this->data['title'] ?? '', true),
            'menu_order' => new AcfExportFieldAttribute('menu_order', $this->data['menu_order'] ?? 0),
            'position' => new AcfExportFieldAttribute('position', $this->data['position'] ?? 'acf_after_title'),
            'style' => new AcfExportFieldAttribute('style', $this->data['style'] ?? 'default'),
            'label_placement' => new AcfExportFieldAttribute('label_placement', $this->data['label_placement'] ?? 'top'),
            'instruction_placement' => new AcfExportFieldAttribute('instruction_placement', $this->data['instruction_placement'] ?? 'label'),
            'hide_on_screen' => new AcfExportFieldAttribute('hide_on_screen', $this->data['hide_on_screen'] ?? []),
            'active' => new AcfExportFieldAttribute('active', $this->data['active'] ?? true),
            'description' => new AcfExportFieldAttribute('description', $this->data['description'] ?? '', true),
            'show_in_rest' => new AcfExportFieldAttribute('show_in_rest', $this->data['show_in_rest'] ?? false),
            // 'modified' => new AcfJsonFieldAttribute('modified', $this->data['modified'] ?? 0), // Unused
            'location' => new AcfExportFieldAttribute('location', $this->data['location'] ?? []),
        ];
    }

    public function getFields(): \Generator
    {
        return $this->fields->getFields();
    }
}
