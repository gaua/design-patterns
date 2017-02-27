<?php declare(strict_types = 1);

use Impl\Structural\Composite\ListItem;
use Impl\Structural\Composite\Item;
use Impl\Structural\Composite\Printer;

include_once '../../../autoload.php';

$home = new ListItem('Dom');
$washCar = new Item('Umyj samochód');
$buyEggs = new Item('kup jajka');
$makeAPoo = new ListItem('zrób kupe');
$cleanArs = new Item('podetrzyj sie');

$makeAPoo->add($cleanArs);
$home->add($washCar);
$home->add($buyEggs);
$home->add($makeAPoo);

$children = new ListItem('Dzieci');
$tom = new ListItem('Tomek');
$tomBirthday = new Item('Urodziny', new DateTime('2000-05-05'));
$ann = new ListItem('Ania');
$annBirthday = new Item('Urodziny', new DateTime('2010-01-01'));

$tom->add($tomBirthday);
$ann->add($annBirthday);
$children->add($tom);
$children->add($ann);

$list = new ListItem('');
$list->add($home);
$list->add($children);

$printer = new Printer();
$printer->print($list);
