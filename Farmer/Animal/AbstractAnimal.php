<?php

namespace Farmer\Animal;


class AbstractAnimal {

	/**
	 * @var array
	 */
	protected $exchangeFor = [];

	/**
	 * @var array
	 */
	protected $canKill = [];

	/**
	 * @var string
	 */
	protected $afraidOf = '';

	/**
	 * @return array
	 */
	public function getExchangeFor(): array {
		return $this->exchangeFor;
	}

	/**
	 * @return array
	 */
	public function getCanKill(): array {
		return $this->canKill;
	}

	/**
	 * @return string
	 */
	public function getAfraidOf(): string {
		return $this->afraidOf;
	}
}