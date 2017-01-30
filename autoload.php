<?php

/**
 * very simple auto loader
 */
spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

require 'vendor/autoload.php';

/*
 * utils - declared here for simplicity
 */

/**
 * @param string $string
 */
function printbr($string)
{
    echo nl2br($string . PHP_EOL);
}

/**
 * @param $string
 * @return string
 */
function addnl($string)
{
    return $string . PHP_EOL;
}

/**
 * @param $key
 * @param array $array
 * @return array mixed
 * @throws Exception
 */
function array_get($key, array $array)
{
    if (!array_key_exists($key, $array)) {
        throw new Exception('Key is not present in array!');
    }

    return $array[$key];
}