<?php

namespace Farmer\Animal;


class AbstractAnimal {

	/**
	 * @var array
	 */
	protected $exchangeFor = [];

	/**
	 * @return array
	 */
	public function getExchangeFor(): array {
		return $this->exchangeFor;
	}
}