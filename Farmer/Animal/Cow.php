<?php

namespace Farmer\Animal;


class Cow extends AbstractAnimal {

	protected $exchangeFor = [
		Pig::class => 3,
		Horse::class => -2,
		BigDog::class => -1,
	];
}