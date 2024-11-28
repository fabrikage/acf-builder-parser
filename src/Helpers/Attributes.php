<?php

namespace Fabrikage\AcfBuilderParser\Helpers;

class Attributes
{
    public static function classHasAttribute($class, $attribute)
    {
        $reflection = new \ReflectionClass($class);
        $attributes = $reflection->getAttributes($attribute);
        return count($attributes) > 0;
    }

    public static function propertyHasAttribute($class, $property, $attribute)
    {
        $reflection = new \ReflectionClass($class);

        try {
            $property = $reflection->getProperty($property);
            $attributes = $property->getAttributes($attribute);
        } catch (\ReflectionException $e) {
            return false;
        }

        return count($attributes) > 0;
    }

    public static function getPropertyAttribute($class, $property, $attribute): ?object
    {
        $reflection = new \ReflectionClass($class);

        try {
            $property = $reflection->getProperty($property);
            $attributes = $property->getAttributes($attribute);
        } catch (\ReflectionException $e) {
            return null;
        }

        if (!empty($attributes)) {
            return $attributes[0]->newInstance();
        }

        return null;
    }
}
