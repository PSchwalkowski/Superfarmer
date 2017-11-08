<?php

namespace Farmer\Animal;


class AbstractAnimal {

	/**
	 * @var array
	 */
	protected $exchangeFor = [];

	protected function getExchangeFor(): array {
		return $this->exchangeFor;
	}
}