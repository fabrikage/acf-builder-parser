<?php

namespace Fabrikage\AcfBuilderParser\Export\Fields;

class FieldTypeResolver
{
    /**
     * Try to resolve the field type.
     *
     * @param string $fieldType The field type coming from the ACF JSON.
     * @return string The resolved field type class.
     */
    public static function resolve(string $fieldType): string|null
    {
        // Loop over all classes in the Types namespace.
        foreach (glob(__DIR__ . \DIRECTORY_SEPARATOR . 'Types' . \DIRECTORY_SEPARATOR . '*.php') as $file) {
            // Get the class name from the file.
            $className = __NAMESPACE__ . '\\Types\\' . pathinfo($file, PATHINFO_FILENAME);

            if ($className === self::class || __NAMESPACE__ . '\\Types\\' . "TypeAbstract" === $className) {
                continue;
            }

            if (method_exists($className, 'getTypeName') && $fieldType === $className::getTypeName()) {
                // Check if the field type matches the class type.
                return $className;
            }
        }

        return null;
    }
}
