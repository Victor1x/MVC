<?php

namespace core\library;

class Container
{
    private static array $container = [];

    public static function setBind(string $key, $value)
    {
        static::$container[$key] = $value;
    }

    public static function getResolve(string $key): string|null
    {
        if (!array_key_exists($key, static::$container)) {
            return null;
        }
        return static::$container[$key];
    }


}