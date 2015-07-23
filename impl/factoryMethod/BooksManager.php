<?php

namespace Impl\FactoryMethod;

/**
 * Class BooksManager
 * @package Impl\FactoryMethod
 */
class BooksManager extends Manager
{
    /**
     * @return Book
     */
    public function createProduct()
    {
        return new Book();
    }

    /**
     * @return string
     */
    public function describeProduct()
    {
        return 'This is a Book description!';
    }
}
