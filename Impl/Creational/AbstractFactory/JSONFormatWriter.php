<?php

namespace Impl\Creational\AbstractFactory;

/**
 * Class JSONFormatWriter
 * @package Impl\AbstractFactory
 */
class JSONFormatWriter extends FormatWriter
{
    /**
     * @param string $data
     */
    public function write($data)
    {
        $colors = explode(' ', $data);

        $this->results = json_encode($colors);
    }
}
