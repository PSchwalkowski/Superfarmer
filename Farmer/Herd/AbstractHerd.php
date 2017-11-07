<?php

namespace Farmer\Herd;

use Farmer\Animal;
use Symfony\Component\VarDumper\VarDumper;

class AbstractHerd {

	protected $animals = [];


	/**
	 * @param Animal\AbstractAnimal $animal
	 * @param int                   $amount
	 *
	 * @throws \Exception
	 */
	public function addAnimals(Animal\AbstractAnimal $animal, int $amount) {
		if ($amount < 1) {
			throw new \Exception('Provide correct amount of animals');
		}

		for ($i = 0; $i < $amount; $i++) {
			$this->animals[] = $animal;
		}
	}

	/**
	 * @return array
	 */
	public function getAnimals(): array {
		return $this->animals;
	}

	/**
	 * @param Animal\AbstractAnimal $firstAnimal
	 * @param Animal\AbstractAnimal $secondAnimal
	 */
	public function reproduce(Animal\AbstractAnimal $firstAnimal, Animal\AbstractAnimal $secondAnimal) {
		if ($this->getAnimalSpeice($firstAnimal) == $this->getAnimalSpeice($secondAnimal) &&
			!in_array($this->getAnimalSpeice($secondAnimal), ['Farmer\Animal\Horse', 'Farmer\Animal\Cow'])) {
			$this->addAnimals($firstAnimal, 1);
		} else {
			$this->reproduceAnimal($firstAnimal);
			$this->reproduceAnimal($secondAnimal);
		}
	}

	/**
	 * @param Animal\AbstractAnimal $animal
	 */
	protected function reproduceAnimal(Animal\AbstractAnimal $animal) {
		$sameSpecieAnimals = $this->getAnimalsBySpecie($this->getAnimalSpeice($animal));
		$amountOfSameSpecieAnimals = count($sameSpecieAnimals);

		if ($amountOfSameSpecieAnimals != 0) {
			$amountToAdd = 0;
			if ($amountOfSameSpecieAnimals % 2 == 0) {
				$amountToAdd = $amountOfSameSpecieAnimals / 2;
			} else {
				$amountToAdd = ($amountOfSameSpecieAnimals + 1) / 2;
			}

			$this->addAnimals($animal, $amountToAdd);
		}
	}

	/**
	 * @param Animal\AbstractAnimal $firstAnimal
	 * @param Animal\AbstractAnimal $secondAnimal
	 */
	public function exchange(Animal\AbstractAnimal $firstAnimal, Animal\AbstractAnimal $secondAnimal) {
		$firstAnimalSpecie = $this->getAnimalSpeice($firstAnimal);
		$secondAnimalSpecie = $this->getAnimalSpeice($secondAnimal);

		VarDumper::dump($firstAnimalSpecie);
		VarDumper::dump($secondAnimalSpecie);
	}

	/**
	 * @param Animal\AbstractAnimal $animal
	 *
	 * @return string
	 */
	protected function getAnimalSpeice(Animal\AbstractAnimal $animal): string {
		return get_class($animal);
	}

	/**
	 * @param string $speice
	 *
	 * @return array
	 */
	protected function getAnimalsBySpecie(string $speice): array {
		$animals = [];
		foreach ($this->animals as $animal) {
			if ($this->getAnimalSpeice($animal) == $speice) {
				$animals[] = $animal;
			}
		}

		return $animals;
	}
}