<?php declare(strict_types = 1);

namespace Impl\Creational\Builder;

abstract class FormItem implements Renderable
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : FormItem
    {
        $this->name = $name;

        return $this;
    }
}
