<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields\Types;

use Fabrikage\AcfBuilderParser\Helpers\Attributes;
use Fabrikage\AcfBuilderParser\Helpers\Str;
use Fabrikage\AcfBuilderParser\Export\AcfExportFieldAttribute;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsHidden;
use Fabrikage\AcfBuilderParser\Export\Fields\Attributes\IsTranslatable;
use Fabrikage\AcfBuilderParser\Export\Fields\Traits\HasDefaults;
use Fabrikage\AcfBuilderParser\Export\Fields\FieldTypeResolver;
use ReflectionProperty;

abstract class TypeAbstract
{
    // Every field has these default attributes
    use HasDefaults;

    public function __construct(array $field)
    {
        $reflection = new \ReflectionClass($this);

        foreach ($field as $key => $value) {
            $property = Str::snakeToCamel($key);

            try {
                $reflectionProperty = $reflection->getProperty($property);
            } catch (\ReflectionException $e) {
                continue;
            }

            if (!$property) {
                continue;
            }

            if ($reflection->hasMethod('set' . ucfirst($property))) {
                $method = 'set' . ucfirst($property);
                $this->{$method}($value);
                continue;
            }

            if ($reflectionProperty->isPublic()) {
                if (in_array($value, ['true', 'false', '0', '1'])) {
                    $value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                }

                $this->{$property} = $value;
            }
        }
    }

    /**
     * Build the class based on the fieldtype
     *
     * @param array $field
     */
    public static function fromArray(array $field): ?TypeAbstract
    {
        $fieldTypeClass = FieldTypeResolver::resolve($field['type']);

        if (!$fieldTypeClass) {
            throw new \Exception(sprintf('Field type "%s" not found', $field['type'])); // NOSONAR
        }

        return new $fieldTypeClass($field);
    }

    /**
     * Get the attributes of the class
     *
     * @return AcfExportFieldAttribute[]
     */
    public function getAttributes(): array
    {
        $reflection = new \ReflectionClass($this);

        // Check if a property has the IgnoreAttribute and remove it from the attributes
        foreach ($reflection->getProperties() as $property) {
            $attributes[$property->getName()] = new AcfExportFieldAttribute(
                $property->getName(),
                $this->{$property->getName()},
                Attributes::propertyHasAttribute($this, $property->getName(), IsTranslatable::class),
                $this->getKeyFormatter($property)
            );

            if ($property->getAttributes()) {
                foreach ($property->getAttributes() as $attribute) {
                    if ($attribute->getName() === IsHidden::class) {
                        unset($attributes[$property->getName()]);
                    }
                }
            }
        }

        return $attributes;
    }

    /**
     * Checks if a "get{PropertyName}Key" method exists on this class and returns a closure that calls that method
     *
     * @param ReflectionProperty $property
     * @return \Closure|null
     */
    private function getKeyFormatter(ReflectionProperty $property): ?\Closure
    {
        $keyFormatter = null;
        $method = sprintf('get%sKey', ucfirst($property->getName()));

        if (\method_exists($this, $method)) {
            $keyFormatter = function () use ($method) {
                return $this->{$method}();
            };
        }

        return $keyFormatter;
    }

    /**
     * This method is used to identify the field type from the export
     *
     * @return string
     */
    abstract public static function getTypeName(): string;
}
