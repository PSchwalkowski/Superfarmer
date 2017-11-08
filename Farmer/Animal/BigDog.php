<?php

namespace Farmer\Animal;


class BigDog extends AbstractAnimal {

	protected $exchangeFor = [
		Cow::class => 1,
	];
}