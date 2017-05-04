<?php

class Minify0_Colors
{
    public static function getHexToNamedMap()
    {
        return include __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'hex-to-named-color-map.php';
    }

    public static function getNamedToHexMap()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'named-to-hex-color-map.php';
    }
}
