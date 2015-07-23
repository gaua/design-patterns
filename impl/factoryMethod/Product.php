<?php

namespace Impl\FactoryMethod;

/**
 * Class Product
 * @package Impl\FactoryMethod
 */
abstract class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
