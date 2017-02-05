<?php declare(strict_types = 1);

namespace Impl\Structural\Decorator;

interface ItemsRepository
{
    public function find(int $id) : Item;
}