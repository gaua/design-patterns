<?php

namespace Impl\Creational\Prototype;

/**
 * Class JSONFormatWriter
 * @package Impl\Prototype
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
