<?php

namespace Farmer\Animal;


class Dog extends AbstractAnimal {

	protected $exchangeFor = [
		Sheep::class => 1,
	];
}