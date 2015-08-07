<?php

namespace Impl\FactoryMethod;

/**
 * Class ArrayConverter
 * @package Impl\FactoryMethod
 */
class ArrayConverter extends Converter
{
    /**
     * @return string
     */
    public function convert()
    {
        $list = '';

        foreach ($this->source as $person) {
            $list .=  $person['id'] . '. ' . $person['name'] . PHP_EOL;
        }

        return $list;
    }
}
