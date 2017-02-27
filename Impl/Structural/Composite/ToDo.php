<?php declare(strict_types = 1);

namespace Impl\Structural\Composite;

interface ToDo
{
    public function getDescription();

    public function getDueDate() : ?\DateTime;

    public function getComposite() : ?ToDo;
}