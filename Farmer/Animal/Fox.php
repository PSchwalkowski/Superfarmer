<?php

namespace Farmer\Animal;


class Fox extends AbstractAnimal {

	protected $canKill = [
		Rabbit::class,
	];

	protected $afraidOf = Dog::class;

}