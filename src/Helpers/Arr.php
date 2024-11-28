<?php

namespace Fabrikage\AcfBuilderParser\Helpers;

class Arr
{
    public static function getMaxLevel(array $array): int
    {
        $max = 0;

        foreach ($array as $value) {
            if (is_array($value)) {
                $max = max($max, self::getMaxLevel($value) + 1);
            }
        }

        return $max;
    }
}
