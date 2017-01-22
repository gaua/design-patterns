<?php declare(strict_types = 1);

namespace Impl\Creational\FactoryMethod;

class ArrayConverter extends Converter
{
    public function convert() : string
    {
        $list = '';

        foreach ($this->source as $person) {
            $list .=  $person['id'] . '. ' . $person['name'] . PHP_EOL;
        }

        return $list;
    }
}
