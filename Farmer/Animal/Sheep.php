<?php

namespace Farmer\Animal;


class Sheep extends AbstractAnimal {

	protected $exchangeFor = [
		Rabbit::class => 6,
		Pig::class => -2,
		Dog::class => -1,
	];
}