<?php

namespace Farmer\Animal;


class Wolf extends AbstractAnimal {


	protected $canKill = [
		Cow::class,
		Pig::class,
		Rabbit::class,
		Sheep::class,
	];

	protected $afraidOf = BigDog::class;
}