<?php

namespace Farmer\Animal;


class Pig extends AbstractAnimal {

	protected $exchangeFor = [
		Sheep::class => 2,
		Cow::class => -3,
	];
}