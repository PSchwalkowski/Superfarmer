<?php

namespace Farmer\Animal;


class Horse extends AbstractAnimal {

	protected $exchangeFor = [
		Cow::class => 2,
	];
}