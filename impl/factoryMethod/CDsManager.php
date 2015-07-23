<?php

namespace Impl\FactoryMethod;

/**
 * Class CDsManager
 * @package Impl\FactoryMethod
 */
class CDsManager extends Manager
{
    /**
     * @return CD
     */
    public function createProduct()
    {
        return new CD();
    }

    /**
     * @return string
     */
    public function describeProduct()
    {
        return 'This is a CD description!';
    }
}
