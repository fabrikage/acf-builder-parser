<?php

namespace Fabrikage\AcfBuilderParser\Helpers;

class Str
{
    public static function snakeToCamel(string $snake): string
    {
        return lcfirst(str_replace(['_', '-'], '', ucwords($snake, '\_\-')));
    }

    public static function snakeToPascal(string $snake): string
    {
        return str_replace(['_', '-'], '', ucwords($snake, '\_\-'));
    }

    public static function camelToSnake(string $camel): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $camel));
    }

    public static function pascalToSnake(string $pascal): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $pascal));
    }
}
