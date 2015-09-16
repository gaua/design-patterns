<?php

namespace Impl\Creational\Prototype;

/**
 * Class ArrayFormatWriter
 * @package Impl\Prototype
 */
class ArrayFormatWriter extends FormatWriter
{
    /**
     * @param string $data
     */
    public function write($data)
    {
        $colors = explode(' ', $data);

        $this->results = $colors;
    }
}
