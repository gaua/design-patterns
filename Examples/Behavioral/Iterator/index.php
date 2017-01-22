<?php declare(strict_types = 1);

include_once '../../../autoload.php';

use Impl\Behavioral\Iterator\Collection;

$data = [1, 3, 'aaa', 'bbb', true];

$collection = new Collection();
$collection->addSequence($data);


printbr('--- foreach access ---');

foreach ($collection as $item) {
    printbr($item);
}


printbr('--- direct iterator access');

$iterator = $collection->getIterator();

while($iterator->valid()) {
    printbr($iterator->current());
    $iterator->next();
}
