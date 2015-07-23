<?php

namespace Impl\FactoryMethod;

/**
 * Class Book
 * @package Impl\FactoryMethod
 */
class Book extends Product
{
    /**
     * @var string
     */
    private $isbn;

    /**
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
}
