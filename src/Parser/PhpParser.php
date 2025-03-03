<?php

namespace Fabrikage\AcfBuilderParser\Parser;

use Fabrikage\AcfBuilderParser\Helpers\Arr;
use Fabrikage\AcfBuilderParser\Helpers\Attributes;
use Fabrikage\AcfBuilderParser\Helpers\Str;
use Fabrikage\AcfBuilderParser\Export\AcfExport;
use Fabrikage\AcfBuilderParser\Export\AcfExportFieldAttribute;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHiddenWhen;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsMaybeHtml;
use Fabrikage\AcfBuilderParser\Export\Fields\Types\TypeAbstract;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PhpParser
{
    private string $builderVariable = '$fieldsBuilder';
    private string $resultVariable = '$acfJson';

    private static $instance;
    private string $textdomain;

    public static function getInstance(): PhpParser
    {
        if (self::$instance === null) {
            self::$instance = new PhpParser();
        }

        return self::$instance;
    }

    private function getBuilderVariable(): string
    {
        // If first character is not a dollar sign, add it
        if (substr($this->builderVariable, 0, 1) !== '$') {
            return '$' . $this->builderVariable;
        }

        return $this->builderVariable;
    }

    public function setBuilderVariable(string $builderVariable): void
    {
        $this->builderVariable = $builderVariable;
    }

    public function getResultVariable(): string
    {
        // If first character is not a dollar sign, add it
        if (substr($this->resultVariable, 0, 1) !== '$') {
            return '$' . $this->resultVariable;
        }

        return $this->resultVariable;
    }

    public function setResultVariable(string $resultVariable): void
    {
        $this->resultVariable = $resultVariable;
    }

    public function setTextdomain(string $textdomain): void
    {
        $this->textdomain = $textdomain;
    }

    private function tab(): string
    {
        return "    ";
    }

    private function newline(): string
    {
        return "\n";
    }

    /**
     * @param AcfExport|AcfExport[] $acfJson
     * @return string
     */
    public function parse(AcfExport|array $acfJson): string
    {
        if ($acfJson instanceof AcfExport) {
            return $this->parseSingle($acfJson);
        }

        $output = '';
        $i = 1;

        foreach ($acfJson as $json) {
            $output .= $this->parseSingle($json, count($acfJson) > 1 ? $i : '');
        }

        return $output;
    }

    private function parseSingle(AcfExport $acfJson, string $appendBuilderVariable = ''): string
    {
        $this->setBuilderVariable($this->getBuilderVariable() . $appendBuilderVariable);

        $fields = $acfJson->getFields();

        $output = sprintf('%s = new %s(\'' . $acfJson->getKey() . '\', [', $this->getBuilderVariable(), FieldsBuilder::class);
        $output .= $this->newline();

        foreach ($acfJson->getDefaults() as $attribute) {
            $output .= $this->tab();
            $output .= sprintf('\'%s\' => %s,', $attribute->getKeyFormatted(), $this->parseAttribute($attribute));
            $output .= $this->newline();
        }

        $output .= ']);';
        $output .= $this->newline();

        foreach ($fields as $field) {
            $output .= $this->parseField($field);
        }

        $output .= $this->newline();
        $output .= sprintf('%s = %s->build();', $this->getResultVariable(), $this->getBuilderVariable());

        return $output;
    }

    private function parseField(TypeAbstract $field, string $parentObject = ''): string
    {

        $output = '';

        $hasSubfields = method_exists($field, 'getSubFields');
        $variableName = Str::snakeToCamel($field->getName());

        $output .= $this->newline();

        if ($hasSubfields) {
            $output .= sprintf('$%s = ', $variableName);
        }

        $output .= sprintf(
            '%s->add%s(\'%s\', [%s]);',
            $parentObject ? '$' . $parentObject : $this->getBuilderVariable(),
            Str::snakeToPascal($field->getType()),
            $field->getKey(),
            $this->parseAttributes($field)
        );

        $output .= $this->newline();

        if ($hasSubfields) {
            /** @var TypeGroup $field */
            foreach ($field->getSubFields() as $subField) {
                $output .= $this->parseField($subField, $variableName);
            }
        }

        return $output;
    }

    private function parseAttributes(TypeAbstract $field): string
    {
        $attributes = $field->getAttributes();

        $output = '';

        foreach ($attributes as $attribute) {
            if ($hiddenWhen = Attributes::getPropertyAttribute($field, $attribute->key, IsHiddenWhen::class)) {
                if ($attribute->value === $hiddenWhen->value()) { // NOSONAR
                    continue;
                }
            }

            if (Attributes::getPropertyAttribute($field, $attribute->key, IsMaybeHtml::class)) {
                $attribute->value = \htmlspecialchars(\addslashes($attribute->value));
            }

            $output .= $this->newline();
            $output .= $this->tab();
            $output .= sprintf('\'%s\' => %s,', $attribute->getKeyFormatted(), $this->parseAttribute($attribute));
        }

        $output .= $this->newline();

        return rtrim($output, ',');
    }

    private function parseAttribute(AcfExportFieldAttribute $attribute): string // NOSONAR
    {
        if (is_bool($attribute->value)) {
            return $attribute->value ? 'true' : 'false';
        }

        if (\is_numeric($attribute->value)) {
            return $attribute->value;
        }

        if (\is_array($attribute->value)) {
            return $this->parseAttributeArrayRecursive($attribute->value);
        }

        if ($attribute->isTranslatable && isset($this->textdomain)) {
            return sprintf('__(\'%s\', \'%s\')', $attribute->value, $this->textdomain);
        }

        return sprintf('\'%s\'', $attribute->value);
    }

    private function parseAttributeArrayRecursive(array $array, int $level = 0, int $max = 0): string
    {
        if ($max === 0) {
            $max = Arr::getMaxLevel($array);
        }

        $output = '';

        if ($level > 0) {
            $output .= $this->tab();
        }

        $output .= '[';
        $output .= $this->newline();
        $output .= $this->tab() . str_repeat($this->tab(), $level);

        foreach ($array as $key => $value) {
            if (\is_array($value)) {
                $output .= sprintf('%s', $this->parseAttributeArrayRecursive($value, $level + 1, $max));
            } else {
                $output .= $this->tab();

                if ($max === 0 && is_numeric($key)) {
                    $output .= sprintf('\'%s\',', $value);
                } else {
                    $output .= sprintf('\'%s\' => \'%s\',', $key, $value);
                }

                $output .= $this->newline();
                $output .= $this->tab() . str_repeat($this->tab(), $level);
            }
        }

        $output .= ']';

        if ($level === $max - 1 || $level !== 0 && $level === $max) {
            $output .= ',';
            $output .= $this->newline();
        }

        $output .= str_repeat($this->tab(), $level);

        return $output;
    }
}
