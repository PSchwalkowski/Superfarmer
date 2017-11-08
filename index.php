<?php

require __DIR__ . '/vendor/autoload.php';

use Farmer\{Animal, Herd\Herd};
use Symfony\Component\VarDumper\VarDumper;


$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Pig, 1);
$herd->reproduce(new Animal\Rabbit, new Animal\Pig);

/**
 * Rabbit - 9
 * Pig - 2
 *
 * OK
 */
VarDumper::dump($herd->getAnimals());

$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Pig, 1);
$herd->reproduce(new Animal\Sheep, new Animal\Pig);

/**
 * Rabbit - 6
 * Pig - 2
 *
 * OK
 */
VarDumper::dump($herd->getAnimals());

$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 5);
$herd->addAnimals(new Animal\Cow, 1);
$herd->reproduce(new Animal\Sheep, new Animal\Pig);

/**
 * Rabbit - 5
 * Cow - 1
 *
 * OK
 */
VarDumper::dump($herd->getAnimals());

$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 4);
$herd->addAnimals(new Animal\Sheep, 2);
$herd->addAnimals(new Animal\Horse, 1);
$herd->reproduce(new Animal\Pig, new Animal\Pig);

/**
 * Rabbit - 4
 * Sheep - 2
 * Horse - 1
 * Pig - 1
 *
 * OK
 */
VarDumper::dump($herd->getAnimals());

$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 1);
$herd->addAnimals(new Animal\Pig, 2);
$herd->exchange(new Animal\Rabbit, new Animal\Sheep);
$herd->exchange(new Animal\Sheep, new Animal\Pig);
$herd->exchange(new Animal\Pig, new Animal\Cow);

/**
 * Cow - 1
 */
VarDumper::dump($herd->getAnimals());

$herd = new Herd();
$herd->addAnimals(new Animal\Horse, 1);
$herd->exchange(new Animal\Horse, new Animal\Cow);
$herd->exchange(new Animal\Cow, new Animal\Pig);
$herd->exchange(new Animal\Pig, new Animal\Sheep);

/**
 * Cow - 1
 * Pig - 2
 * Sheep - 2
 */
VarDumper::dump($herd->getAnimals());

//$herd = new Herd();
//$herd->addAnimals(new Animal\Rabbit, 6);
//$herd->addAnimals(new Animal\Sheep, 6);
//$herd->addAnimals(new Animal\Pig, 6);
//$herd->addAnimals(new Animal\Cow, 6);
//$herd->addAnimals(new Animal\Horse, 6);
//$herd->addAnimals(new Animal\Dog, 1);
//$herd->attack(new Animal\Wolf);
//$herd->attack(new Animal\Fox);
//
///**
// * Horse - 6
// */
//VarDumper::dump($herd->getAnimals());
