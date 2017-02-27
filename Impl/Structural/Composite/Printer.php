<?php declare(strict_types = 1);

namespace Impl\Structural\Composite;

class Printer
{
    public function print(ToDo $item) : void
    {
        foreach ($item->getItems() as $loopItem) {
            $this->printWithStars($loopItem);
        }
    }

    private function printWithStars(ToDo $item, string $stars = '') : void
    {
        if ($item->getComposite()) {
            $this->printRow($item, $stars);
            foreach ($item->getItems() as $loopItem) {
                $this->printWithStars($loopItem, $stars . "*");
            }
        } else {
            $this->printRow($item, $stars);
        }
    }

    private function printRow(ToDo $item, string $stars) : void
    {
        $row = $stars . $item->getDescription();

        if ($item->getDueDate()) {
            $row .= " due to " . $item->getDueDate()->format('Y-m-d');
        }

        echo printbr($row);
    }
}