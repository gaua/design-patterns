<?php declare(strict_types = 1);

namespace Impl\Structural\Composite;

class Item implements ToDo
{
    /** @var string */
    protected $description;

    /** @var \DateTime */
    protected $dueDate;

    public function __construct($description, ?\DateTime $dueDate = null)
    {
        $this->description = $description;
        $this->dueDate = $dueDate;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDueDate(?\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function getComposite(): ?ToDo
    {
        return null;
    }
}