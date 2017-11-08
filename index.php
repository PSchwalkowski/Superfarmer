<?php

require __DIR__ . '/vendor/autoload.php';

use Farmer\{Animal, Herd\Herd};
use Symfony\Component\VarDumper\VarDumper;

/**
 * 1
 * Rabbit - 9
 * Pig - 2
 *
 * OK
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Pig, 1);
$herd->reproduce(new Animal\Rabbit, new Animal\Pig);

VarDumper::dump($herd->getAnimals());

/**
 * 2
 * Rabbit - 6
 * Pig - 2
 *
 * OK
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Pig, 1);
$herd->reproduce(new Animal\Sheep, new Animal\Pig);

VarDumper::dump($herd->getAnimals());

/**
 * 3
 * Rabbit - 5
 * Cow - 1
 *
 * OK
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 5);
$herd->addAnimals(new Animal\Cow, 1);
$herd->reproduce(new Animal\Sheep, new Animal\Pig);

VarDumper::dump($herd->getAnimals());

/**
 * 4
 * Rabbit - 4
 * Sheep - 2
 * Horse - 1
 * Pig - 1
 *
 * OK
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 4);
$herd->addAnimals(new Animal\Sheep, 2);
$herd->addAnimals(new Animal\Horse, 1);
$herd->reproduce(new Animal\Pig, new Animal\Pig);

VarDumper::dump($herd->getAnimals());

/**
 * 5
 * Cow - 1
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 1);
$herd->addAnimals(new Animal\Pig, 2);
$herd->exchange(new Animal\Rabbit, new Animal\Sheep);
$herd->exchange(new Animal\Sheep, new Animal\Pig);
$herd->exchange(new Animal\Pig, new Animal\Cow);

VarDumper::dump($herd->getAnimals());

/**
 * 6
 * Cow - 1
 * Pig - 2
 * Sheep - 2
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Horse, 1);
$herd->exchange(new Animal\Horse, new Animal\Cow);
$herd->exchange(new Animal\Cow, new Animal\Pig);
$herd->exchange(new Animal\Pig, new Animal\Sheep);

VarDumper::dump($herd->getAnimals());

/**
 * 7
 * Horse - 6
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 6);
$herd->addAnimals(new Animal\Pig, 6);
$herd->addAnimals(new Animal\Cow, 6);
$herd->addAnimals(new Animal\Horse, 6);
$herd->addAnimals(new Animal\Dog, 1);
$herd->attack(new Animal\Wolf);
$herd->attack(new Animal\Fox);

VarDumper::dump($herd->getAnimals());

/**
 * 8
 * Rabbit - 6
 * Sheep - 6
 * Pig - 6
 * Cow - 6
 * Horse - 6
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 6);
$herd->addAnimals(new Animal\Pig, 6);
$herd->addAnimals(new Animal\Cow, 6);
$herd->addAnimals(new Animal\Horse, 6);
$herd->addAnimals(new Animal\Dog, 1);
$herd->attack(new Animal\Fox);

VarDumper::dump($herd->getAnimals());

/**
 * 9
 * Rabbit - 6
 * Sheep - 6
 * Pig - 6
 * Cow - 6
 * Horse - 6
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 6);
$herd->addAnimals(new Animal\Pig, 6);
$herd->addAnimals(new Animal\Cow, 6);
$herd->addAnimals(new Animal\Horse, 6);
$herd->addAnimals(new Animal\BigDog, 1);
$herd->attack(new Animal\Wolf);

VarDumper::dump($herd->getAnimals());

/**
 * 10
 * Sheep - 6
 * Pig - 6
 * Cow - 6
 * Horse - 6
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 6);
$herd->addAnimals(new Animal\Pig, 6);
$herd->addAnimals(new Animal\Cow, 6);
$herd->addAnimals(new Animal\Horse, 6);
$herd->attack(new Animal\Fox);

VarDumper::dump($herd->getAnimals());

/**
 * 11
 * Horse - 6
 * Dog - 1
 */
$herd = new Herd();
$herd->addAnimals(new Animal\Rabbit, 6);
$herd->addAnimals(new Animal\Sheep, 6);
$herd->addAnimals(new Animal\Pig, 6);
$herd->addAnimals(new Animal\Cow, 6);
$herd->addAnimals(new Animal\Horse, 6);
$herd->addAnimals(new Animal\Dog, 1);
$herd->attack(new Animal\Wolf);

VarDumper::dump($herd->getAnimals());
