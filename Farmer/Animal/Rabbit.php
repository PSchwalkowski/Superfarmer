<?php

namespace Farmer\Animal;


class Rabbit extends AbstractAnimal {

	protected $exchangeFor = [
		Sheep::class => -6,
	];
}