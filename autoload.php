<?php

/**
 * very simple auto loader
 */
spl_autoload_register(function ($className) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

/*
 * utils - declared here for simplicity
 */

/**
 * @param string $string
 */
function printnl($string)
{
    echo nl2br($string . PHP_EOL);
}
