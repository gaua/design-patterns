<?php declare(strict_types = 1);

namespace Impl\Structural\Composite;

class Printer
{
    const TAB = "&nbsp&nbsp&nbsp&nbsp";

    public function print(ToDo $item) : void
    {
        $this->printWithSpace($item);
    }

    private function printWithSpace(ToDo $item, string $space = "", int $level = 0) : void
    {
        if ($item->getComposite()) {
            if ($level > 0) {
                $this->printRow($item, $space);
                $space .= static::TAB;
            }
            /** @var ListItem $item */
            foreach ($item->getItems() as $loopItem) {
                $this->printWithSpace($loopItem, $space, $level + 1);
            }
        } else {
            $this->printRow($item, $space);
        }
    }

    private function printRow(ToDo $item, string $space) : void
    {
        $row = $space . $item->getDescription();

        if ($item->getDueDate()) {
            $row .= " due to " . $item->getDueDate()->format('Y-m-d');
        }

        echo printbr($row);
    }
}